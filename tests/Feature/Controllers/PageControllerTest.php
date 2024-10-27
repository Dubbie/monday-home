<?php

namespace Tests\Feature\Controllers;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PageControllerTest extends TestCase
{
    const BASIC_ROUTES = [
        'about-us',
        'contact-us',
        'contract',
        'services',
        'complaints',
        'transfer',
        'mnb'
    ];

    const INSURANCE_ROUTES = [
        'insurance.company',
        'insurance.life',
        'insurance.property-and-liability',
        'insurance.cargo',
        'insurance.liability',
        'insurance.condominium',
        'insurance.agriculture'
    ];

    #[DataProvider('basicRoutesProvider')]
    public function test_basic_routes_load(string $route): void
    {
        $response = $this->get(route($route));
        $response->assertStatus(200);
    }

    #[DataProvider('insuranceRoutesProvider')]
    public function test_insurance_routes_load(string $route): void
    {
        $response = $this->get(route($route));
        $response->assertStatus(200);
    }

    public function test_not_found_works(): void
    {
        $response = $this->get('notanexistingurl');
        $response->assertStatus(200);
    }

    public static function basicRoutesProvider(): array
    {
        return array_map(fn($route) => [$route], self::BASIC_ROUTES);
    }

    public static function insuranceRoutesProvider(): array
    {
        return array_map(fn($route) => [$route], self::INSURANCE_ROUTES);
    }
}
