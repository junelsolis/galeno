<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;


    public function setUp(): void
    {
      parent::setUp();

      \DB::table('roles')->insert([
        ['name' => 'physician', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'nurse', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'staff', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
      ]);

    }


    public function user()
    {
      return factory('App\User')->create();
    }

    public function staff()
    {
      return factory('App\User')->create()->assignRoles('staff');
    }

    public function admin()
    {
      return factory('App\User')->create()->assignRoles('admin');
    }

    public function nurse()
    {
      return factory('App\User')->create()->assignRoles('nurse');
    }

    public function physician()
    {
      return factory('App\User')->create()->assignRoles('physician');
    }
}
