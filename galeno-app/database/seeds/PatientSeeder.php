<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $physicians = \App\User::whereHas('roles', function ($q) {
            $q->whereIn('name', ['physician']);
        })->get();

        $nurses = factory('App\User', 3)->create();

        foreach($nurses as $nurse) {
          $nurse->assignRoles('nurse');
        }

        $patients = factory('App\Patient', 50)->create();

        foreach ($patients as $patient) {
            $patient->assign($physicians->random());

            factory('App\Visit')->create([
              'patient_id' => $patient->id,
              'creator_id' => $nurses->random()->id,
              'attending_id' => $physicians->random()->id
            ]);
        }
    }
}
