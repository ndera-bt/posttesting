<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

        $name = 'ndera';
        $users = array(
            "name" => "Ndera Tim",
            "mail" => "nderababa@gmail.com",
            "phone" => "07068765453",
            "dob" => "3/3/1992"
        
        );
        return view('user',compact('name', 'users'));
    }
}
