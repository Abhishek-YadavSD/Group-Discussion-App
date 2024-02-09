<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class CustomAuthController extends Controller
{
    //
    public function login()
    {
        return view('pages.newuser');
    }

    public function registerUser(Request $request){
        $request->validate(
            [
                'name' =>'required',
                'email' =>'required|email|unique:users',
                'password'=>'required|min:5|min:12'
                // 'password_confirmation'=>'<PASSWORD>'
            ]
        );
        // echo "hello ";
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if($res){
            // return redirect()->route('login');
            return back()->with('success','You have successfully registered');
        }else{
            return back()->with('fail','Something went wrong');
        }

    }

    public function loginUser(Request $request){
        
        $request->validate(
            [
                'email' =>'required|email',
                'password'=>'required|min:5|min:12'
                // 'password_confirmation'=>'<PASSWORD>'
            ]
        );
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail','password not matches');
            }
        } else {
            return back()->with('fail','user not found');
        }
        // return redirect()
            // return "hhhh"
    }

    public function dashboard(){
        return "Welcome!! To dashboard";
    }
}
