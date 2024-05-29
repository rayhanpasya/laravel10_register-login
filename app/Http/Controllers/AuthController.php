<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
          // Validasi input
          $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email.unique' => 'Email Ini Sudah Terdaftar.',
        ]);

        // Cek apakah nama dan email sudah ada di database
        // $existingUser = User::where('name', $request->name)
        //                     ->where('email', $request->email)
        //                     ->first();

        // if ($existingUser) {
        //     return back()->withErrors(['email' => 'Nama dan Email sudah Terdaftar']);
        // }

        // Buat pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Register Berhasil');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('Success', 'Login Berhasil');
        }
 
        return back()->with('error', 'Error, Email or Password Salah');
    
    }

    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}
