<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class AdminFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_logout_and_protected_pages(): void
    {
        config(['admin.email' => 'owner@example.com', 'admin.password' => 'local-test-password']);
        $this->get('/admin/dashboard')->assertRedirect(route('admin.login.form'));
        $this->from('/login')->post('/login', ['email' => 'owner@example.com', 'password' => 'wrong'])
            ->assertSessionHasErrors('email')->assertSessionMissing('admin_logged_in');
        $this->assertArrayNotHasKey('password', session()->getOldInput());
        $this->post('/login', ['email' => 'owner@example.com', 'password' => 'local-test-password'])
            ->assertRedirect(route('admin.dashboard'))->assertSessionHas('admin_logged_in', true);
        $this->get('/admin/dashboard')->assertOk();
        $this->get('/admin/blog/create')->assertOk();
        $this->post('/logout')->assertRedirect(route('admin.login.form'))->assertSessionMissing('admin_logged_in');
        $this->get('/admin/dashboard')->assertRedirect(route('admin.login.form'));
    }

    public function test_symbol_titles_have_unique_reachable_slugs_and_crud_works(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        $this->withSession(['admin_logged_in' => true]);
        $payload = ['title' => '!!!', 'category' => 'General Care', 'excerpt' => 'Test excerpt',
            'content' => '<p>Test body</p>', 'read_time' => '2 min read'];
        $this->post('/admin/blog', $payload)->assertRedirect(route('admin.dashboard'));
        $this->post('/admin/blog', $payload)->assertRedirect(route('admin.dashboard'));
        $this->assertDatabaseHas('blogs', ['slug' => 'article']);
        $this->assertDatabaseHas('blogs', ['slug' => 'article-1']);
        $guide = Blog::where('slug', 'article')->firstOrFail();
        $this->get('/blog/article')->assertOk()->assertSee('Test body');
        $this->get('/admin/blog/'.$guide->id.'/edit')->assertOk();
        $this->put('/admin/blog/'.$guide->id, array_merge($payload, ['title' => 'Updated article']))
            ->assertRedirect(route('admin.dashboard'));
        $this->get('/blog/updated-article')->assertOk();
        $this->delete('/admin/blog/'.$guide->id)->assertRedirect(route('admin.dashboard'));
        $this->get('/blog/updated-article')->assertNotFound();
    }

    public function test_invalid_input_is_rejected_before_writing_to_database(): void
    {
        $this->withSession(['admin_logged_in' => true])->post('/admin/blog', [
            'title' => ['invalid'], 'category' => str_repeat('x', 256), 'excerpt' => 'Excerpt',
            'content' => ['invalid'], 'read_time' => '2 min read',
            'image' => 'https://example.com/'.str_repeat('x', 256),
        ])->assertSessionHasErrors(['title', 'category', 'content', 'image']);
        $this->assertDatabaseCount('blogs', 0);
    }
}
