<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patients.index'); // Make sure this view exists
    }
}
