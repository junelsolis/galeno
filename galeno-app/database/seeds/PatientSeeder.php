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

        $patients = factory('App\Patient', 50)->create();

        foreach ($patients as $patient) {
            $patient->assign($physicians->random());
        }
    }
}
