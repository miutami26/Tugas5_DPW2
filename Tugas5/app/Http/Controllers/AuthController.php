<?php
namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller{
   
    
    function showlogin(){
        return view('login');
    }
    function loginProcess(){
        if(Auth::attempt(['email' => request ('email'),'password' => request ('password')])){
            return redirect('produk')->with('success', 'login berhasil');
        }else{
        return back()->with('danger', 'login gagal,silahkan cek email dan password anda');
        }
    }
    function showlogout(){
        return view('logout');
    
    }
    function showprofil(){
        
    }
    
    
    
}