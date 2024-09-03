<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function Index(){
        return view('frontend.layout.dashboard');
    }//end method


    function login(){
        return view('frontend.auth.login');
    }//end method



    function register(){
        return view('frontend.auth.register');
    }//end method

    function dashboard(){
        return view('frontend.dashboard.user_dashboard');

    }

    function userLogout(){

        Auth::guard('web')->logout();

        $notification =array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

    return redirect()->back()->with($notification);
    }//end method
}
