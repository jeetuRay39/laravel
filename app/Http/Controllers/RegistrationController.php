<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{ 
   function form(){
    return view('form');  
   }
   function register(Request $request){ 
      $request->validate([
         'name'=>'required',
         'email'=>'required|email',
         'password'=>'required|confirmed',
         'password_confirmation'=>'required', 

      ]);
    print_r($request->all());

   }
}
