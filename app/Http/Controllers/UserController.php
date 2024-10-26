<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        // return "Laravel code";
        return view("user");
    } 

    function aboutUser(){
        return "This is Abhimanyu Gaurav";
    }

    function getUserName($name){
        // return "Hello!!" . $name;
        return view("getUserName",["name"=>$name]);

    }
}