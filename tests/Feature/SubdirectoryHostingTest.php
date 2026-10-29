<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class SubdirectoryHostingTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_and_admin_links_keep_the_installation_prefix(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        $base = 'https://sandybrown-lion-702928.hostingersite.com/site/public';
        URL::forceRootUrl($base);
        URL::forceScheme('https');
        try {
            foreach (['/', '/services', '/blog', '/login'] as $path) {
                // Dispatch the normal route while generating URLs for a mounted app.
                $response = $this->get('http://localhost'.$path)->assertOk();
                $response->assertSee('href="'.$base.'"', false);
                $this->assertDoesNotMatchRegularExpression('~(?:href|action|data-service-url)="/(?!/)~', $response->getContent());
                if ($path !== '/login') {
                    $response->assertSee($base.'#booking', false)->assertSee($base.'/blog', false)
                        ->assertSee($base.'/css/style.css', false);
                } else {
                    $response->assertSee('action="'.$base.'/login"', false);
                }
            }
        } finally {
            URL::forceRootUrl(null);
            URL::forceScheme(null);
        }
    }
}
