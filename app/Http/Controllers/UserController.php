<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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

    // function adminLogin(){
    //     return view("admin.login");
    // }

    function userHome(){
            return view("home");
    }

    function userAbout($name){
        return view("about",["name"=>$name]);
    }

    # To check view exits or not:
    function adminLogin(){
        // if(view::exists('admin.login')){
        //     return view('admin.login');
        // }else{
        //     echo "No view found";
        // } 
        if(view::exists('admin.signup')){
            return view('admin.signup');
        }else{
            echo "No view found";
        } 
    
    }

} 