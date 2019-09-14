<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_who_is_not_logged_in_is_taken_to_the_home_page()
    {
        $this->get('/app/nurse')->assertRedirect('/');
        $this->get('/app/staff')->assertRedirect('/');
    }

    /** @test */
    public function a_user_may_login()
    {
        $nurse = $this->nurse()->setPassword('changeme123');

        $att = ['email' => $nurse->email, 'password' => 'changeme123'];

        $this->post('/login', $att)
            ->assertRedirect('/app');

        $this->json('POST', '/login', $att)
              ->assertStatus(200)
              ->assertJson(['status' => 'OK', 'message' => 'Login successful.']);
    }

    /** @test */
    public function a_user_with_the_wrong_credentials_cannot_login()
    {
        $user = $this->admin()->setPassword('correctPassword');

        $att = ['email' => $user->email, 'password' => 'wrongpassword'];

        $this->post('login', $att)
            ->assertRedirect('/')
            ->assertSessionHas('status', 'Error')
            ->assertSessionHas('message', 'Sorry, invalid credentials.');

        $this->json('POST', 'login', $att)
              ->assertStatus(200)
              ->assertJson(['status' => 'Error', 'message' => 'Sorry, invalid credentials.']);
    }

    /** @test */
    public function a_signed_in_user_may_logout()
    {
      $this->withoutExceptionHandling();
        $user = $this->nurse();

        $this->actingAs($user)->get('/app/logout')
              ->assertStatus(302)
              ->assertRedirect('/');
        $this->assertGuest();

    }

    /** @test */
    public function it_shows_a_reset_password_page()
    {
        $this->get('reset-password')
            ->assertViewIs('reset-password')
            ->assertSee('Reset Password');
    }
}
