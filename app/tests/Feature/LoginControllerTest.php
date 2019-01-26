<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use Hash;
use Auth;
use DB;


class LoginControllerTest extends TestCase
{

  use RefreshDatabase;

  /** @test */
  public function controller_shows_login_view() {

    $response = $this->get('/');

    //$response->assertStatus(200);
    $response->assertViewIs('login');
  }


  /** @test */
  public function controller_redirects_logged_in_user() {

    $user = factory('App\User')->make();

    $response = $this->actingAs($user)->get('/');

    $response->assertRedirect('/provider');


    // if admin, is redirected to admin page
    Auth::logout();

    $user = factory('App\User')->create();
    DB::table('user_roles')->insert([
      'user_id' => $user->id,
      'role' => 'administrator'
    ]);

    $response = $this->actingAs($user)->get('/');
    $response->assertRedirect('/admin');

  }

  /** @test */
  public function controller_logs_in_a_user() {
    $user = factory('App\User')->create([
      'username' => 'johnny',
      'password' => Hash::make('this is a password'),
    ]);


    $response = $this->post('/', [
      'username' => $user->username,
      'password' => 'this is a password',
    ]);

    // active user able to login with correct username/pass combination
    $response->assertRedirect('/provider');
    $this->assertAuthenticatedAs($user);


    // inactive user should not be able to login
    $user->disable();
    $user->save();
    Auth::logout();
    $response = $this->post('/', [
      'username' => $user->username,
      'password' => 'this is a password',
    ]);

    $response->assertRedirect('/');
  }


  /** @test */
  public function controller_can_log_a_user_out() {
    Auth::logout();

    $response = $this->get('/');

    $response->assertViewIs('login');
  }

}
