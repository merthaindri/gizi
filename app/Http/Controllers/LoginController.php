<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function postlogin(){
        return view('admin.login');
    }
}
