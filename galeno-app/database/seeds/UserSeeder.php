<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory('App\User', 20)->create();

        $roleNames = ['physician', 'nurse', 'staff', 'admin'];

        foreach ($users as $user) {
            $user->assignRoles($roleNames[array_rand($roleNames)]);
        }

        // create my own user
        $user = factory('App\User')->create([
          'name'     => 'Junel Solis',
          'email'    => 'junel.solis@gmail.com',
          'password' => Hash::make('password888'),
        ]);

        $user->assignRoles('nurse');
    }
}
