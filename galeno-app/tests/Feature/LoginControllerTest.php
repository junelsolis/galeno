<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Facades\Tests\Arrangements\CreateUser;


class LoginControllerTest extends TestCase
{


    use RefreshDatabase;


    /** @test */
    public function a_user_who_is_not_logged_in_is_taken_to_the_home_page()
    {

        $this->get('/')
              ->assertStatus(200)
              ->assertViewIs('main')
              ->assertSee('Galeno');

        $this->get('/app/nurse')
              ->assertRedirect('/');

    }



    /** @test */
    public function a_user_may_login()
    {
      $this->withoutExceptionHandling();

        $user = CreateUser::withPassword('changeme123')->withRoles('staff');

        $att = [ 'email' => $user->email, 'password' => 'changeme123'];

        $this->post('/login', $att)
            ->assertRedirect('/app/staff');

    }


    /** @test */
    public function a_user_with_the_wrong_credentials_cannot_login() {

        $user = CreateUser::withPassword('correctpassword')->withRoles('admin');

        $att = ['email' => $user->email, 'password' => 'wrongpassword'];

        $this->post('login', $att)
            ->assertRedirect('/')
            ->assertSessionHas('status', 'Error')
            ->assertSessionHas('message', 'Sorry, invalid credentials.');


    }


    /** @test */
    public function a_logged_in_user_is_redirected_to_their_section()
    {

        $this->withoutExceptionHandling();

        $user = CreateUser::withPassword('changeme333')->withRoles('nurse');


        $this->post('/login', ['email' => $user->email, 'password' => 'changeme333'])
              ->assertRedirect('/app/nurse');

    }



    /** @test */
    public function a_user_with_multiple_roles_is_allowed_to_choose_a_section()
    {

        $user = CreateUser::withPassword('changeme123')->withRoles(['physician','nurse','admin']);

        $this->post('/login', ['email' => $user->email, 'password' => 'changeme123'])
                ->assertRedirect('/app/switcher');

    }



    /** @test */
    public function it_shows_a_reset_password_page() {


        $this->get('reset-password')
            ->assertViewIs('reset-password')
            ->assertSee('Reset Password');

    }

    /** @test */
    // public function a_user_can_reset_their_password()
    // {
    //
    //     $user = CreateUser::withPassword('changeme333')->withRoles();
    //
    //
    //     $this->post('reset-password', ['email' => $user->email])
    //           ->assertViewIs('check-email-password-reset');
    //
    // }
}
