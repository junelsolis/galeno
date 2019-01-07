<?php

use Faker\Generator as Faker;
use App\Patient;
use App\User;
use App\Diagnosis;

$factory->define(App\Diagnosis::class, function (Faker $faker) {

  // array of common diagnoses
  $dx = array(
    'Hypertension',
    'Hyperlipidemia',
    'Diabetes',
    'Back Pain',
    'Anxiety',
    'Obesity',
    'Allergic rhinitis',
    'Reflux esophagitis',
    'Hypothyroidism',
    'Osteoarthritis',
    'Fibromyalgia',
    'Malaise',
    'Acute laryngopharyngitis',
    'Acute maxillary sinusitis',
    'Major depressive disorder',
    'Acute bronchitis',
    'Asthma',
    'Nail fungus',
    'Coronary atherosclerosis',
    'Urinary tract infection'
  );

  return [

    'name' => $dx[array_rand($dx)],
    'icd_10_code' => rand(100,999),
    'patient_id' => factory('App\Patient')->create()->id,
    'provider_id' => factory('App\User')->create()->id,
  ];
});
