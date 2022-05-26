<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::User()->usertype;
        if($usertype == '1'){
            return view('admin.home');
        }else{
            return view('dashboard');
        }
    }
}
