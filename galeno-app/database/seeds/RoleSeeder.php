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
          ['name' => 'physician', 'created_at' => now(), 'updated_at' => now()],
          ['name' => 'nurse', 'created_at' => now(), 'updated_at' => now()],
          ['name' => 'staff', 'created_at' => now(), 'updated_at' => now()],
          ['name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
