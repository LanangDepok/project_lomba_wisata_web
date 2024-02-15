<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class DestinationTest extends TestCase
{
    public function test_create_destination()
    {
        $image = UploadedFile::fake()->image('gambar palsu.jpg');

        $this->post('/destination/store', [
            'name' => 'Gunung',
            'location' => 'https://googlemap/jatim',
            'description' => 'ini bagus banget',
            'image' => $image,
        ])->assertRedirect('/');
    }
}
