<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserLoginTest extends TestCase {
	use RefreshDatabase, WithFaker;

	/**
	 * Test that a registered user can successfully log in with correct credentials.
	 *
	 * @return void
	 */
	public function testRegisteredUserCanLogin() {
		// Create a user
		$user = User::factory()->create([
			'email' => 'johndoe@gmail.com',
			'password' => Hash::make('password'),
		]);

		// Make a POST request to the login endpoint
		$response = $this->post('/login', [
			'email' => $user->email,
			'password' => $user->password, // Assuming the password is 'password'
		]);

		// Assert that the user is redirected to the home page
		$response->assertRedirect('/dashboard');

		// Assert that the user is authenticated
		$this->assertAuthenticatedAs($user);
	}
}
