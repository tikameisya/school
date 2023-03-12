<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function proseslogin(Request $request){
        
        
        if(Auth::attempt($request->only('email','password'))){
            if(Auth()->user()->role=='user')
                return redirect('/home')->with('sukses','Selamat Datang Anda Berhasil Login');
        }

        return redirect('login')->with('gagallogin', 'login gagal, silahkan coba lagi!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('logout', 'Anda Telah Logout');
    }
    
    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        User::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'role'=>'user',
            'remember_token'=> Str::random(60),
        ]);

        return redirect('/login')->with('berhasil', 'register berhasil!!, Silahkan Login');
    }

    public function home(){
        $produk = produk::count();
        return view('home', compact('produk'));
    }
}
