<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoomSearchTest extends TestCase {
	use RefreshDatabase;

	/**
	 * A basic feature test example.
	 */
	public function test_user_can_search_available_rooms(): void {

		// Create some test data
		$room1 = Room::factory()->create(['capacity' => 2]);
		$room2 = Room::factory()->create(['capacity' => 4]);
		$room3 = Room::factory()->create(['capacity' => 6]);

		// Create bookings to simulate room availability
		Booking::factory()->create([
			'room_id' => $room1->id,
			'check_in_date' => '2024-05-10',
			'check_out_date' => '2024-05-15',
		]);

		// Perform a search with criteria
		$response = $this->get('/bookings', [
			'check_in_date' => '2024-05-15',
			'check_out_date' => '2024-05-20',
			'guests' => 2,
		]);

		// Assert that response is successful
		$response->assertStatus(200);

		// Assert that search results contain expected room
		$response->assertSee($room2->name);
		$response->assertDontSee($room1->name);
		$response->assertDontSee($room3->name);

	}
}
