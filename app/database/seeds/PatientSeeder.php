<?php

use Illuminate\Database\Seeder;
use App\Patient;
use App\Encounter;
use Carbon\Carbon;

class PatientSeeder extends Seeder
{



    public function run()
    {

        // create 60 patients for John Smith, physician
        $count = 0;

        while ($count < 59) {
          $patient = factory('App\Patient')->create([
            // 'sid' => $count + 1,
            'provider_id' => 2
          ]);


          $random = rand(1,4);
          if ($random == 4) {
            factory('App\Encounter')->create([
              'patient_id' => $patient->id,
              'provider_id' => 2,
              'date' => Carbon::now()
            ]);
          }

          $count++;
        }

        // create 5 physicians with 15 random patients each
        $count = 0;

        while ($count < 5) {

          $doctor = factory('App\User')->create();

          DB::table('user_roles')->insert([
            'user_id' => $doctor->id,
            'role' => 'physician'
          ]);

          $int = 70;
          while ($int < 84) {
            $patient = factory('App\Patient')->create([
              'id' => $int * 10 * $count,
              'provider_id' => $doctor->id
            ]);

            // randomly create an encounter
            $random = rand(1,5);
            if ($random == 5) {
              factory('App\Encounter')->create([
                'patient_id' => $patient->id,
                'provider_id' => $doctor->id,
                'date' => Carbon::now()
              ]);
            }

            $int++;
          }


          $count++;
        }

    }
}
