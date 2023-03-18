<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    //
    public function login()
    {
        return view("auth.Login");

    }
    public function registration()
    {

        return view("auth.registration");
    }
    public function RegisterUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|max:12|min:5'
        ]);
        // saving the data into the db..

        $user=new User();  //request is  used to get the submitted form data 
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $res=$user->save(); //it is used to save the data into db..

        if($res)
        {
            return back()->with('success','You have registered succesfully');
        }else{
            return back()->with('fail','Something went wrong');
        }

    } 
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|max:12|min:5'
        ]);
        $user= User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');

            }else{
            return back()->with('fail',"This password is not matches");
            }
        }else{
            return back()->with('fail',"This email is not registered");
        }
    }
    public function dashboard()
    {
        $data= array();
        if (Session::has('loginId')){
            $data= User::where('id','=', Session::get('loginId'))->first();
        }
        // echo $data;
        // exit;
        return view('auth.dashboard',compact('data')); //passing the id into the view using the compact method..
    }

    // logout
    public function logout()
    {
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }


}
