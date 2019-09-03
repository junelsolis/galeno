<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          ['name' => 'physician'],
          ['name' => 'nurse'],
          ['name' => 'staff'],
          ['name' => 'admin'],
        ]);
    }
}
