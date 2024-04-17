<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Announcements;
use Illuminate\Support\Facades\Auth;

class AnnoucementTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_store_announcement_by_organizer()
    {
        // Create an organizer user
        $organizer = User::factory()->create(['role' => 'organizer']);

        // Authenticate as the organizer user
        $this->actingAs($organizer);

        // Prepare announcement data
        $announcementData = [
            'title' => 'Sample Announcement',
            'type' => 'Sample Type',
            'date' => '2024-04-01',
            'description' => 'Sample Description',
            'location' => 'Sample Location',
            'required_skills' => ['Skill 1', 'Skill 2'],
        ];

        // Send store announcement request
        $response = $this->postJson('/api/annoucement', $announcementData);

        
    }
}
