<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RatingValueTest extends TestCase
{
    public function test_admin_can_add_rating_value()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $data = $this->ratingValueData();

        $response = $this->actingAs($superUser)->postJson('/api/admin/rating-value', $data);
        $response->assertStatus(200);
    }

    public function test_get_all_rating_values_if_route_exist()
    {
        $response = $this->getJson('/api/admin/rating-value');

        $response->assertStatus(200);
        $response->assertOk();
    }

    public function test_can_view_all_rating_values()
    {
        $this->withoutExceptionHandling();

        $this->ratingValueData();

        $response = $this->getJson('/api/admin/rating-value');

        $response->assertStatus(200);
    }

    public function test_admin_can_view_single_rating_value()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $rating_value = $this->createRatingValue();

        $response = $this->actingAs($superUser)->getJson('/api/admin/rating-value/' . $rating_value->id);

        $response->assertStatus(200);
    }

    public function test_admin_can_update_a_rating_value()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $rating_value = $this->createRatingValue();

        $data = $this->ratingValueData();

        $response = $this->actingAs($superUser)->putJson('/api/admin/rating-value/' . $rating_value->id, $data);
        $response->assertStatus(200);
    }

    public function test_admin_can_delete_a_rating_value()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $rating_value = $this->createRatingValue();

        $response = $this->actingAs($superUser)->deleteJson('/api/admin/rating-value/' . $rating_value->id);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('rating_values', ['id' => $rating_value->id]);
    }
}
