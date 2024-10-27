<?php

namespace Tests\Feature\Controllers\Api;

use Tests\TestCase;

class NoticeControllerTest extends TestCase
{
    public function test_it_can_read_notice_and_set_cookie()
    {
        // Make the request to the read method
        $response = $this->postJson(route('api.notice.read'));

        // Assert the response status
        $response->assertStatus(200);

        // Assert the JSON structure and message
        $response->assertJson([
            'message' => 'Elolvasva'
        ]);

        // Assert the cookie is set correctly
        $this->assertTrue($response->headers->has('set-cookie')); // Check if any cookies are set

        // Retrieve the cookies from the response header
        $cookieHeader = $response->headers->getCookies();

        // Check that the first cookie is the one we expect
        $noticeCookie = collect($cookieHeader)->first(function ($cookie) {
            return $cookie->getName() === 'notice_read';
        });

        // Assert that the cookie exists and check its properties
        $this->assertNotNull($noticeCookie);
        $this->assertEquals('1', $noticeCookie->getValue());
        $this->assertEquals(2592000, $noticeCookie->getMaxAge()); // Check cookie expiration time
    }
}
