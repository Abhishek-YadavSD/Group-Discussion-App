<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use Session;

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
                'password'=>'required'
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
                'password'=>'required'
                // 'password_confirmation'=>'<PASSWORD>'
            ]
        );
        $user = User::where('email', '=', $request->email)->first();
        
        // $user = DB::table('users')
        // ->where('email', '=', $request->email)
        // ->where('password', '=', $request->password)
        // ->first();

        // dd($user);
        
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
        if(Session::has('loginId')){
            $data =User::where('id','=', Session::get('loginId'))->first();
        }
        return view('pages.userprofile', compact('data'));
        
    }
    
    public function logout(){
        Session::forget('loginId');
        return redirect('login');
    }
}
