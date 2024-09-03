<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    function adminLoginForm(){

        return view('backend.auth.login');

    }//end method


    function adminLogin(Request  $request){

      $request->validate([
         'email'=>'required | email',
         'password'=>'required',

      ]);

      $check = $request->all();
      //return $check;

      $data=[
        'email'=>$check['email'],
        'password'=>$check['password'],

         ];

         if(Auth::guard('admin')->attempt($data)){
             return redirect()->route('admin.dashboard')->with('success','Login Successfully');
         }else{
            return redirect()->route('admin.login')->with('error','invalid credentials');
         }

    }//end method


    function adminDashboard(){

       return view("backend.admin_dashboard");

    }//end method

    function adminLogout(){

        Auth::guard('admin')->logout();

    

        return redirect()->route('admin.login')->with('success','succesfully login');

    }//end method

    function adminProfile(){
        $id=Auth::guard('admin')->user()->id;
        // return $id;
         $profileleData=Admin::find($id);
        return view("backend.body.admin_profile",compact('profileleData'));

    }//end method



    function adminProfileUpdate(Request $request){

        $validated = $request->validate([
            'name' => 'required|unique:admins|max:255',
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Get the logged-in user's ID
        $id = Auth::guard('admin')->user()->id;
        
        // Find the existing admin record
        $data = Admin::find($id);
        //dd($data);
        // Update the admin's details
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->address = $request->address;
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/admin_image'),$filename);
            $data->photo = $filename;
        }
      
//dd($data);        // Save the updated admin record
        $data->save();

        $notification =array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

    return redirect()->back()->with($notification);

      

     }//end method


}
