<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 13; $i++) {
            Appointment::create([
                'doctor_id' => 1, // replace with existing doctor ID
                'patient_id' => 1, // replace with existing patient ID
                'date' => now()->addDays($i),
                'status' => 'pending'
            ]);

    }
}

}
