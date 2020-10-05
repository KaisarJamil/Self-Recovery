<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    //
    public function show(){
        return view('admin.adddoctor');
    }

    public function store(Request $request){
        $val=Validator::make($request->all(),[
            'role_id'=>'required|integer|max:1',
            'name' => 'required|string|max:255',
            'email'=>'required|string|max:255',
            'password'=>'required|string|min:8',
            'mobile_no'=>'required|string|max:11',
            'age'=>'required|string|max:2',
        ]);

        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $user=new User();
        $user->role_id=$request->role_id;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->mobile_no=$request->mobile_no;
        $user->age=$request->age;
        $user->save();

        return redirect()->back()->with('success','Successfully Added Doctor');

    }
}
