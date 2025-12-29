<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_products()
    {
        Product::create([
            'name' => 'Test Product',
            'price' => 10000,
            'stock' => 10,
            'sku' => 'TEST-001'
        ]);

        $response = $this->getJson('/api/products');

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'data' => [
                    [
                        'name' => 'Test Product',
                        'sku' => 'TEST-001'
                    ]
                ]
            ]);
    }

    public function test_can_create_product()
    {
        $response = $this->postJson('/api/products', [
            'name' => 'New Product',
            'price' => 20000,
            'stock' => 5,
            'sku' => 'NEW-001'
        ]);

        $response->assertStatus(201)
            ->assertJson([
                'success' => true,
                'message' => 'Product created',
                'data' => [
                    'name' => 'New Product',
                    'sku' => 'NEW-001'
                ]
            ]);

        $this->assertDatabaseHas('products', ['sku' => 'NEW-001']);
    }
}