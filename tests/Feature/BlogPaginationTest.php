<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class BlogPaginationTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_pagination_has_distinct_articles_and_preserves_filter(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);

        for ($i = 1; $i <= 8; $i++) {
            Blog::create([
                'title' => "Pagination article $i",
                'slug' => "pagination-article-$i",
                'category' => 'Hygiene',
                'excerpt' => 'Test excerpt',
                'content' => '<p>Test content</p>',
                'read_time' => '2 min read',
                'date' => 'October 29, 2026',
            ]);
        }

        $first = $this->get('/blog?category=Hygiene');
        $first->assertOk()->assertSee('category=Hygiene&amp;page=2', false);
        $firstArticles = $first->viewData('articles');
        $this->assertCount(6, $firstArticles);

        $second = $this->get('/blog?category=Hygiene&page=2');
        $second->assertOk()->assertSee('Previous')->assertDontSee('>Next</a>', false);
        $secondArticles = $second->viewData('articles');
        $this->assertCount(2, $secondArticles);
        $this->assertEmpty(array_intersect(
            array_column($firstArticles->items(), 'slug'),
            array_column($secondArticles->items(), 'slug')
        ));
    }

    public function test_empty_category_does_not_offer_fake_page_links(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        $this->get('/blog?category=Unknown')
            ->assertOk()
            ->assertSee('No articles found in this category')
            ->assertDontSee('class="blog-pagination-clean"', false);
    }
}
