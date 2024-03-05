<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
       $validatedData = $request->validate([
        'name' => 'required|max:255',
        'nik' => 'required|min:16|max:16|unique:users,nik',
        'username' => 'required|min:3|max:255',
        'tgl_lahir' => 'required',
        'umur' => '',
        'no_telp' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:3|max:255'
       ]);

       // Hash the password
       $validatedData['password'] = bcrypt($validatedData['password']);

       // Create the user
       $user = User::create($validatedData);

       // Login the user
       Auth::login($user);

       // Redirect to the login page with a success message
       return redirect('/dashboard')->with('sukses', 'Registrasi Sukses! Anda sudah login.');
    }
}
