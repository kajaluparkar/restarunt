<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function redirect(){

        $usertype= Auth::user()->usertype;

        if($usertype == '1')
        {
            return view('admin.adminHome');
        }
        else
        {
            return view('home');
        }
    }
}
