<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;


use App\Models\User;

class infoController extends Controller
{
 public function login()
    {
       return view('login');
    }
    public function postlogin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=> 'required',
        ]);
  // $details->email = request('username');
  // $details->password = request('password');
        $details=$request->only('username','password');
        if (Auth::attempt($details)) {
             return 
            redirect()->intended('/');
            // code...
        }
        return
        redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function reg()
    {
        //
        //$student= Student::all();
       return view('register');
    }
    public function register(Request $request)

    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $data = $request->all();
        $check= $this->create($data);
        return redirect('/')->with('status', 'You have Successfully Register, Kindly Login to continue');
 
      // $info= new details;
      // $info -> username = $request->username;
      // $info -> password= $request->password;
      // $info->save();
      // return redirect('welcome');


        //
    }
    public function create(array $data){
        return User::create([
            'username'=>$data['username'],
            'password'=>Hash::make($data['password'])
        ]);
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect ('/')->with('status', 'You have Successfully logout.');;
    }
    public function post(){

    }
}
