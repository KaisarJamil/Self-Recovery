<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;

class DoctorlistController extends Controller
{
    //
    public function show(){
        $doctors = about::where('role_id', '2')->get();
        return view('doctorlist',compact('doctors'));
    }
}

