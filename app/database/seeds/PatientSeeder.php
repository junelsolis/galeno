<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientSeeder extends Seeder
{


    public function run()
    {
        // create 5 physicians with 15 random patients each
        $count = 0;

        while ($count < 5) {

          $doctor = factory('App\User')->create();

          DB::table('user_roles')->insert([
            'user_id' => $doctor->id,
            'role' => 'physician'
          ]);

          factory('App\Patient',15)->create([
            'provider_id' => $doctor->id
          ]);

          $count++;
        }

    }
}
