<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LampTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_should_redirect_index_to_app()
    {
        // redirect index ('/') to ('/app')
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function test_should_fail_if_url_is_not_valid() {
        $response = $this->post('/app', [
            'url' => 'ww2.apple.com/main.html', // sample invalid url
        ]);

        $response->assertStatus(422);
        $response->assertValidationErrors(['url']);
    }

    public function test_should_create_short_url_succesfully() {
        $response = $this->post('/app', [
            'url' => 'https://www.apple.com/ph/shop/buy-mac/mac-mini/apple-m2-chip-with-8-core-cpu-and-10-core-gpu-256gb', // sample valid url
        ]);

        $response->assertStatus(201);
    }
}
