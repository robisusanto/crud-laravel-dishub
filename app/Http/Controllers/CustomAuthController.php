<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index(){

        if(Auth::check()){
            return redirect('spesifikasi');
        }
        return view('auth.login');
    }

    public function customLogin(Request $request){
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credential = $request -> only('email', 'password');
        if(Auth::attempt($credential)){
            return redirect('spesifikasi')-> with('success', 'login success');
        }
        else{
            return redirect('login')-> with('failed', '! login failed. Check email and your password' );
        }
    }

    public function register(){
        return view('auth.register');
    }

    public function customRegister(Request $request){

            $request -> validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);
    
            $data = $request-> all();
            $check = $this->create($data);
    
            return redirect('login')->withSuccess('You Have signed in');

    }

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function signOut(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}