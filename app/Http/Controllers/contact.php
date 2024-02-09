<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact extends Controller
{
    public function contactpage(){
        return view('contact.contactpage');
    }
    public function services(){
        return view('contact.services');
    }
    // public function services($name){
    //     return view('contact.services',['name'=>$name]);
    // }
}
