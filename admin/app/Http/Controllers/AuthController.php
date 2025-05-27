<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    function login(){
        $user = Auth::user();
        // jika user sudah login
        if($user){
            // cek level
            if($user->level =='admin') {
                return redirect()->intended('admin'); 
            } else if($user->level == 'user'){
                return redirect()->intended('user');
            }
        }

        return view("login");
    }

    function do_login(request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8'
    ]);
    // menyiapkan variabel cridentials
        $cridentials = $request->only('email', 'password');

    // cek cridentials ke tabel users menggunakan auth
        if(Auth::attempt($cridentials)){
           // jika berhasil login
           // cek level user
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            }
            else if($user->level == 'user'){
                return redirect()->intended('user');
            }
            return redirect()->intended('/');
        }

        // jika login gagal
        return redirect('login')
            ->witherrors([
                'failed' => 'User tidak ditemukan atau password yang anda masukkan salah'
            ])
            ->withInput();
    }

    function register(){
        return view("register");
    }

    function do_register(Request $request){
    $validator = Validator::make(
        $request->all(),
        [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]
    );

    if($validator->fails()){
        return redirect('register')
            ->withErrors($validator)
            ->withInput();
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->level = 'user';
    $user->save();

    return redirect('login');
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

}
