<?php

use Illuminate\Database\Seeder;
use App\User;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create admin user
        factory('App\User')->create([
          'id' => 1,
          'password' => Hash::make('adminpassword')
        ]);

        DB::table('user_roles')->insert([
          'user_id' => 1,
          'role' => 'administrator'
        ]);

        // create random users
        fatory('App\User')->create(20);

    }
}
