<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create(['name' => 'Juan Cruz', 'email' => 'juan@gmail.com']);
        Patient::create(['name' => 'Maria Santos', 'email' => 'maria@gmail.com']);
        Patient::create(['name' => 'Carlos Reyes', 'email' => 'carlos@gmail.com']);
        Patient::create(['name' => 'Ana Robles', 'email' => 'ana@gmail.com']);
        Patient::create(['name' => 'Leo Garcia', 'email' => 'leo@gmail.com']);
        Patient::create(['name' => 'Grace Fernandez', 'email' => 'grace@gmail.com']);
        Patient::create(['name' => 'Roberto Diaz', 'email' => 'roberto@gmail.com']);
    }
}
