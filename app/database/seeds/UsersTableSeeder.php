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
          'username' => 'admin',
          'password' => Hash::make('adminpassword')
        ]);

        DB::table('user_roles')->insert([
          'user_id' => 1,
          'role' => 'administrator'
        ]);

        // create default physician
        factory('App\User')->create([
          'id' => 2,
          'name' => 'John Smith',
          'username' => 'jsmith',
          'password' => Hash::make('coolpassword')
        ]);

        DB::table('user_roles')->insert([
          'user_id' => 2,
          'role' => 'physician'
        ]);

        // create default staff
        factory('App\User')->create([
          'id' => 3,
          'name' => 'Jane Doe',
          'username' => 'jdoe',
          'password' => Hash::make('coolpassword')
        ]);

        DB::table('user_roles')->insert([
          'user_id' => 3,
          'role' => 'medical-staff'
        ]);


        // create random clinicians
        $count = 0;
        while ($count < 14) {

          DB::table('user_roles')->insert([
            'user_id' => factory('App\User')->create()->id,
            'role' => 'medical-staff'
          ]);

          $count++;

        }

    }
}
