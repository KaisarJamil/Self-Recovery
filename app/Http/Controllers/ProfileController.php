<?php

namespace App\Http\Controllers;

use App\about;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    //
    public function show(){
        return view('profile');
    }

    public function index(){
        return view('editprofile');
    }


    public function store(Request $request){
        $user_id=auth()->user()->id;
        $image=$request->file('image');
        if (isset($image)){
            //create an unique name
            $imgName=time().'.'.$image->getClientOriginalExtension();

            //create folders
            if (!Storage::disk('public')->exists('profilepic')){
                Storage::disk('public')->makeDirectory('profilepic');
            }

            $img=Image::make($image)->resize(300,300)->stream(); //resize image

            Storage::disk('public')->put('profilepic/'.$imgName,$img); //Save Image

            about::where('user_id',$user_id)->update([
                'image' => $imgName,
                'description' => request('description'),

            ]);

            return redirect()->back()->with('success','Profile Updated Successfully');
        }


    }
}
