<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WelcomePageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testToSeeIfUserExists(){
        $user = User::factory()->create();
        $response = $this->get('/');
        $response->assertSee($user->name);
    }

    public function testUserCurrentlyLoggedInOnlyShowsWhenLoggedIn(){
        $logInText = 'Currently logged in';
        $user = User::factory()->create();
        $response = $this->get('/');
        $response->assertOk();
        $response->assertDontSee($logInText);
    }

    public function testUserCurrentlyLogged(){
        $logInText = 'Currently logged in';
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/');
        $response->assertOk();
        $response->assertSee($logInText);
    }
}
