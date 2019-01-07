<?php

use Illuminate\Database\Seeder;
use App\User;

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
          'name' => 'System Administrator',
          'password' => Hash::make('adminpassword')
        ]);

        DB::table('user_roles')->insert([
          'user_id' => 1,
          'role' => 'administrator'
        ]);

        // create random users
        $count = 0;
        while ($count < 10) {

          DB::table('user_roles')->insert([
            'user_id' => factory('App\User')->create()->id,
            'role' => 'clinician'
          ]);

          $count++;

        }

    }
}
