<?php

namespace Tests\Feature\Controllers;

use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Support\Facades\App;

class LocaleControllerTest extends TestCase
{
    // Define available locales for testing
    protected array $availableLocales;

    protected function setUp(): void
    {
        parent::setUp();
        // Mock available locales as per your config
        $this->availableLocales = config('app.available_locales');
    }

    public function test_successful_locale_update(): void
    {
        $newLocale = $this->availableLocales[0]; // Assuming the first one is valid

        $response = $this->get(route('locale.set', $newLocale));

        // Check if the locale is set correctly
        $this->assertEquals($newLocale, App::getLocale());

        // Check if the session has the new locale
        $this->assertEquals($newLocale, session('locale'));

        // Verify redirection
        $response->assertStatus(Response::HTTP_FOUND);
    }

    public function test_invalid_locale_redirects(): void
    {
        $invalidLocale = 'invalid-locale';

        $response = $this->get(route('locale.set', $invalidLocale));

        // Check that the app locale hasn't changed
        $this->assertNotEquals($invalidLocale, App::getLocale());

        // Verify redirection
        $response->assertStatus(Response::HTTP_FOUND);
    }

    public function test_locale_persistence_in_session(): void
    {
        $newLocale = $this->availableLocales[0]; // Assuming the first one is valid

        // Perform the locale update
        $this->get(route('locale.set', $newLocale));

        // Check if the session has the new locale
        $this->assertEquals($newLocale, session('locale'));
    }

    public function test_locale_redirection(): void
    {
        $newLocale = $this->availableLocales[0];

        // Mock previous URL
        $previousUrl = url()->previous();

        $response = $this->get(route('locale.set', $newLocale));

        // Verify that the redirection happens to the previous URL
        $response->assertRedirect($previousUrl);
    }
}
