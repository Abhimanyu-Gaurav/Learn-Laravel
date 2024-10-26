<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "Laravel code";
    }

    function aboutUser(){
        return "This is Abhimanyu Gaurav";
    }

    function getUserName(){
        return "Hello!! Abhimanyu gaurav";
    }
}