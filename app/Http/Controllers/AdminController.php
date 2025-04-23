<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;


class AdminController extends Controller
{
    public function dashboard()
{
    return view('dashboard', [
        'totalDoctors' => Doctor::count(),
        'totalPatients' => Patient::count(),
        'totalAppointments' => Appointment::count(),
        'recentDoctors' => Doctor::latest()->take(5)->get(),
        'recentPatients' => Patient::latest()->take(5)->get(),
        'recentAppointments' => Appointment::latest()->take(5)->get(),
       
        

        

        // ✅ Add this for Chart.js
        'appointmentsByDate' => Appointment::selectRaw('DATE(date) as day, COUNT(*) as total')
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->take(7)
            ->get()
            ->reverse(),
    ]);

    return view('dashboard', compact('totalDoctors'));
}


}
