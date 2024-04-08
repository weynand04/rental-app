<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\mobil;

class MobilControllerTest extends TestCase
{
    public function it_returns_index_view_with_mobil_data()
    {
        // Arrange
        $mobil = Mobil::factory()->create();

        // Act
        $response = $this->get(route('admin.mobil.index'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('admin.mobil.index');
        $response->assertSee($mobil->nama);
    }
}
