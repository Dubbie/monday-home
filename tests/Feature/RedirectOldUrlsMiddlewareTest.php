<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RedirectOldUrlsMiddlewareTest extends TestCase
{
    /**
     * Test the old URL is being redirected to the new one.
     */
    public function test_redirect_works_for_old_urls(): void
    {
        $response = $this->get('/page/services.html');

        $response->assertRedirect(route('services'));
        $response->assertStatus(301);
    }

    public function test_all_mapped_urls_redirect_correctly()
    {
        foreach (config('redirects') as $oldUrl => $newRoute) {
            $response = $this->get($oldUrl);
            $response->assertRedirect(route($newRoute));
            $response->assertStatus(301);
        }
    }

    public function test_does_not_redirect_new_routes(): void
    {
        $response = $this->get(route('services'));

        $response->assertStatus(200);
    }
}
