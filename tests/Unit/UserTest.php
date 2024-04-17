<?php

namespace Tests\Feature;
 use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    // public function test_register_new_user()
    // {
    //     $userData = [
    //         'name' => 'Salma Ezzouina',
    //         'email' => 'salmaEzzouina@example.com',
    //         'password' => 'password',
    //         'password_confirmation' => 'password', // Add password confirmation
    //         'role' => 'organizer' // Assuming you have a role field in your user table
    //     ];

    //     $response = $this->postJson('/api/register', $userData);

    //     $response->assertStatus(200)
    //         ->assertJson([
    //             'status' => true,
    //             'message' => 'User registered successfully'
    //         ]);

    //     // Ensure user is in the database
    //     $this->assertDatabaseHas('users', ['email' => 'salmaEzzouina@example.com']);
    // }

    // public function test_login_existing_user()
    // {
    //     // // Create a user in the database
    //     // $user = User::factory()->create([
    //     //     'email' => 'kawthar@gmail.com',
    //     //     'password' => Hash::make('password'),
    //     //     'role' => 'organizer', 
    //     // ]);

    //     // Prepare login data
    //     $loginData = [
    //         'email' => 'kawthar@gmail.com',
    //         'password' => 'imane123',
    //     ];

    //     // Send login request
    //     $response = $this->postJson('/api/login', $loginData);

    //     // Assert response
    //     $response->assertStatus(200)
    //         ->assertJsonStructure([
    //             'status',
    //             'message',
    //             'token',
    //         ]);
    // }
}
