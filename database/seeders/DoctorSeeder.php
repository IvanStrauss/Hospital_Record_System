<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create(['name' => 'Dr. Juan Dela Cruz', 'specialty' => 'Cardiology']);
        Doctor::create(['name' => 'Dr. Maria Santos', 'specialty' => 'Pediatrics']);
        Doctor::create(['name' => 'Dr. Kent Lopez', 'specialty' => 'Orthopedics']);
    }
}
