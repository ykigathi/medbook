<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Patient;


class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            "name" => "Otieno Otieno",
            "gender" => "Male",
            "service_type" => "Outpatient",
            "service" => "Lab Test",
            "comment" => "Not Feeling Well",
            "dob" => Carbon::create('2023', '06', '09'),
           
        ]);

        Patient::create([
            "name" => "Jane Doe",
            "gender" => "Female",
            "service_type" => "Inpatient",
            "service" => "Lab Test",
            "comment" => "Not Feeling Well",
            "dob" => Carbon::create('2023', '06', '09'),
           
        ]);

        Patient::create([
            "name" => "Jame Wakanda",
            "gender" => "Male",
            "service_type" => "Outpatient",
            "service" => "Lab Test",
            "comment" => "Malaria Test",
            "dob" => Carbon::create('2023', '06', '09'),
           
        ]);

        Patient::create([
            "name" => "Ann Wanyama",
            "gender" => "Female",
            "service_type" => "Outpatient",
            "service" => "Checkup",
            "comment" => "Feeling Well",
            "dob" => Carbon::create('2023', '06', '09'),
           
        ]);

        Patient::create([
            "name" => "Mike Kamau",
            "gender" => "Male",
            "service_type" => "Inpatient",
            "service" => "Lab Test",
            "comment" => "Not Feeling Well",
            "dob" => Carbon::create('2023', '06', '09'),
           
        ]);

        Patient::create([
            "name" => "Atieno Otieno",
            "gender" => "Female",
            "service_type" => "Inpatient",
            "service" => "X-Ray",
            "comment" => "First time",
            "dob" => Carbon::create('2023', '06', '09'),
           
        ]);
    }
}
