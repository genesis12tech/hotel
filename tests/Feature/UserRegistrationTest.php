<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRegistrationTest extends TestCase {
	use RefreshDatabase; // Reset the database after each test

	/**
	 * A user can successfully register with valid information.
	 *
	 * @return void
	 */
	public function test_user_can_register_with_valid_information() {
		$response = $this->post('/register', [
			'name' => 'John Doe',
			'email' => 'john@example.com',
			'password' => 'password',
			'password_confirmation' => 'password',
		]);

		$response->assertRedirect('/dashboard'); // Assuming the user is redirected to the home page after registration

		$this->assertDatabaseHas('users', [
			'name' => 'John Doe',
			'email' => 'john@example.com',
		]);
	}

	public function test_user_cannot_register_with_invalid_or_incomplete_information() {
		// Attempt to register with invalid/incomplete information
		$response = $this->post('/register', [
			'name' => 'John Doe', // Invalid without email
			'email' => '',
			'password' => 'password',
			'password_confirmation' => 'password',
		]);

		// Assert that the user was not created
		$response->assertSessionHasErrors(['email']);
		$this->assertGuest();
	}

}