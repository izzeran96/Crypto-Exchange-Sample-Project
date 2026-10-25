<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index(){
        return view('clients.profile.index');
    }

    public function profileEdit(){
        return view('clients.profile.profile');
    }

    public function profileEditPost(){

    }
}
