<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bookPhoneC extends Controller
{
    public function showBookPhoneV(){
        return view('bookPhone');
    }

    public function savePhone(Request $request){
        bookPhone::create($request->only('name','phone','date'));
        return response()->json(['mensaje' => 'Contacto guardado exitosamente']);
    }
}
