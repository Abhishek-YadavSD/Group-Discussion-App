<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function registe(Request $request)
    {        
        $request->validate(
            [
                'name' => 'required',
                'email' =>'required|email',
                'password'=>'required|password',
                // 'password_confirmation'=>'required'
            ]
        );

    }
}
