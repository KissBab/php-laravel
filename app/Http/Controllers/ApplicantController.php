<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){
        $applicants = Applicant::all;
        return view('index', compact('applicants'));
    }
}
