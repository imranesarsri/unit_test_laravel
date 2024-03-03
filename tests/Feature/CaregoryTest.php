<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CaregoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_category_index(): void
    {
        $response = $this->get('/category/index');
        $data = $response->json();
        // dd($data);
        $category = [
            [
                'id' => '1',
                'title' => 'category 1',
                'description' => 'description category 1',
            ],
            [
                'id' => '2',
                'title' => 'category 2',
                'description' => 'description category 2',
            ],
            [
                'id' => '3',
                'title' => 'category 3',
                'description' => 'description category 3',
            ]
        ];
        $this->assertEquals($category, $data);
        $this->assertEquals(count($category), count($data));
        $response->assertJson([
            [
                'id' => '1',
                'title' => 'category 1',
                'description' => 'description category 1',
            ]
        ]);
        $response->assertStatus(200);
    }
}