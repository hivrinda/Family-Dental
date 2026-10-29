<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class AdminBlogPublishingTest extends TestCase
{
    use RefreshDatabase;

    private function createGuide(): Blog
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);

        return Blog::create([
            'title' => 'Original aligners guide',
            'slug' => 'invisible-aligners-cost-kerala',
            'category' => 'Aligners',
            'excerpt' => 'Original guide excerpt',
            'content' => '<p>Original guide content</p>',
            'read_time' => '5 min read',
            'date' => 'October 29, 2026',
        ]);
    }

    public function test_deleted_seeded_guide_stays_removed_from_public_pages(): void
    {
        $guide = $this->createGuide();
        $slug = $guide->slug;

        $this->withSession(['admin_logged_in' => true])
            ->delete('/admin/blog/'.$guide->id)
            ->assertRedirect(route('admin.dashboard'));

        $this->assertDatabaseMissing('blogs', ['slug' => $slug]);
        $this->get('/blog/'.$slug)->assertNotFound();
        $this->get('/blog')->assertOk()->assertSee('No articles found in this category');
        $this->get('/')->assertOk()->assertDontSee('/blog/'.$slug, false);
        $this->get('/sitemap.xml')->assertOk()->assertDontSee('/blog/'.$slug, false);
    }

    public function test_renaming_seeded_guide_does_not_restore_old_slug(): void
    {
        $guide = $this->createGuide();
        $oldSlug = $guide->slug;

        $this->withSession(['admin_logged_in' => true])
            ->put('/admin/blog/'.$guide->id, [
                'title' => 'Updated aligners guide',
                'category' => 'Aligners',
                'excerpt' => 'Updated guide excerpt',
                'content' => '<p>Updated guide content</p>',
                'read_time' => '5 min read',
            ])->assertRedirect(route('admin.dashboard'));

        $this->get('/blog/updated-aligners-guide')->assertOk()->assertSee('Updated guide content');
        $this->get('/blog/'.$oldSlug)->assertNotFound();
        $this->get('/sitemap.xml')->assertOk()
            ->assertSee('/blog/updated-aligners-guide', false)
            ->assertDontSee('/blog/'.$oldSlug, false);
    }
}
