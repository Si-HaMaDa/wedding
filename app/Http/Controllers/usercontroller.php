<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Area;
use App\Ad;

class usercontroller extends Controller
{

    public function profile()
    {
        return view('frontend.interface.users.profile');

    }
    public function userads()
    {
        return view('frontend.interface.users.ads');
        
    }

    public function storeads(Request $request)
    {


    }
    public function favourite()
    {
        return view('frontend.interface.users.favourite');

    }
     public function archives()
     {
        return view('frontend.interface.users.archives');
     }

     public function messages()
     {
        return view('frontend.interface.users.messages');
     }
     public function login()
     {
        return view('frontend.interface.users.login');
     }
    public function register()
    {
        return view('frontend.interface.users.register');
    }


}
