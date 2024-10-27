<?php

namespace Tests\Feature\Controllers\Api;

use App\Services\QuoteService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuoteControllerTest extends TestCase
{
    public function test_send_company_insurance_quote(): void
    {
        $data = [
            'company_name' => 'Company Name',
            'email' => 'test@example.com',
            'phone' => '06301231234',
            'professional_activity' => 'Professional Activity',
            'message' => 'This is a message.'
        ];

        // Make the request
        $response = $this->postJson(route('api.quote.company'), $data);

        // Assert response
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Quote sent successfully',
            'success' => true
        ]);
    }

    public function test_send_property_and_liability_insurance_quote(): void
    {
        $data = [
            'name' => 'John Doe',
            'phone' => '06301231234',
            'email' => 'test@example.com',
            'need_information' => 'Érdekel',
            'building_insurance' => 'Érdekel',
            'inventory_insurance' => 'Érdekel',
            'liability_insurance' => 'Érdekel',
            'architect_installation_insurance' => 'Érdekel',
            'message' => 'This is a message.'
        ];

        // Make the request
        $response = $this->postJson(route('api.quote.property-and-liability'), $data);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Quote sent successfully',
            'success' => true
        ]);
    }

    public function test_send_cargo_insurance_quote(): void
    {
        $data = [
            'name' => 'John Doe',
            'phone' => '06301231234',
            'email' => 'test@example.com',
            'shipping_area' => 'Európán belül',
            'message' => 'This is a message'
        ];

        // Make the request
        $response = $this->postJson(route('api.quote.cargo'), $data);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Quote sent successfully',
            'success' => true
        ]);
    }

    public function test_send_life_insurance_quote(): void
    {
        $data = [
            'name' => 'John Doe',
            'phone' => '06301231234',
            'email' => 'test@example.com',
            'accident_insurance' => 'Érdekel',
            'life_insurance' => 'Érdekel',
            'health_insurance' => 'Érdekel',
            'message' => 'This is a message'
        ];

        // Make the request
        $response = $this->postJson(route('api.quote.life'), $data);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Quote sent successfully',
            'success' => true
        ]);
    }

    public function test_send_liability_insurance_quote(): void
    {
        $data = [
            'name' => 'John Doe',
            'phone' => '06301231234',
            'email' => 'test@example.com',
            'investment_cost' => '50M',
            'message' => 'This is a message'
        ];

        // Make the request
        $response = $this->postJson(route('api.quote.liability'), $data);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Quote sent successfully',
            'success' => true
        ]);
    }

    public function test_send_condominium_insurance_quote(): void
    {
        $data = [
            'name' => 'John Doe',
            'phone' => '06301231234',
            'email' => 'test@example.com',
            'sub_deposit_count' => '2',
            'zip_code' => '1225',
            'intercom_count' => '2',
            'message' => 'This is a message'
        ];

        // Make the request
        $response = $this->postJson(route('api.quote.condominium'), $data);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Quote sent successfully',
            'success' => true
        ]);
    }

    public function test_send_agricultural_insurance_quote(): void
    {
        $data = [
            'name' => 'John Doe',
            'phone' => '06301231234',
            'email' => 'test@example.com',
            'area' => '5',
            'yield' => '5',
            'price_per_unit' => '5',
            'message' => 'This is a message'
        ];

        // Make the request
        $response = $this->postJson(route('api.quote.agriculture'), $data);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Quote sent successfully',
            'success' => true
        ]);
    }
}
