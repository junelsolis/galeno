<?php

use Illuminate\Database\Seeder;
use App\Diagnosis;

class DiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Diagnosis',30)->create();
    }
}
