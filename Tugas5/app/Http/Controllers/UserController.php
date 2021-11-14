<?php
namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller{
    function index(){
        $data['list_user'] = user::all();
        return view('user.index',$data);
    }
    function Create(){
        return view('user.create');
    }
    function Store(){
        $user = new user;
        $user->nama= request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('user')->with('success', 'data berhasil ditambahkan');
        
    }
    function Show(user $user){
        $data['user'] = $user;
        return view('user.show',$data);
        
    }
    function edit(user $user){
        $data['user'] = $user;
        return view('edit1',$data);
       
    }
    function update(user $user){
        $user->nama= request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password'))$user->password = bcrypt(request('password'));
        $user->save();
        return redirect('user')->with('sucsess', 'data berhasil tambahkan');
       
    }
    function destroy(user $user){
        $user->delete();

        return redirect('user')->with('danger', 'data berhasil dihapus');
       
    }
}