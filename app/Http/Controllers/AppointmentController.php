<?php

namespace App\Http\Controllers;

use App\appointment;
use App\time;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    //
    public function show(){
        $times=time::all();
        $doctors = User::where('role_id', '2')->get();
        return view('appointment',compact('times','doctors'));
    }


    public function store(Request $request){

        $val=Validator::make($request->all(),[
            'date'=>'required|date',
            'time'=>'required|string',
            'doctor_name'=>'required|string',
        ]);

        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $appointmnets=new appointment();
        $appointmnets->patient_email=auth()->user()->email;
        $appointmnets->date=$request->date;
        $appointmnets->time=$request->time;
        $appointmnets->doctor_name=$request->doctor_name;
        $appointmnets->save();

        return redirect()->back()->with('success','Successfully Added Appointment');
        }


}
