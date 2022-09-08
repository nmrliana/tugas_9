<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('frontview.login');
    }

    function loginProcess(){
        if (Auth::attempt(['email' => request('email'), 'password' =>request('password')])){
            return redirect('dashboard')->with('success','Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan cek Email dan Password anda');
        }
    }

    function showregister(){
        return view('frontview.register');
    }

    function showlogin2(){
        return view('backview.login2');
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

}
