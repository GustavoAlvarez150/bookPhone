<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterUser;

class LoginController extends Controller{
 public function ShowLogin(){
    return view('Login');
 }

 public function SetUSer(Request $request){
   //insercion a bd falta crear migración y modelo de datos 
   RegisterUser::create($request->only('mail','password'));
   return response()->json(['mensaje'=>'Usuario guardado exitosamente']);
 }

}
