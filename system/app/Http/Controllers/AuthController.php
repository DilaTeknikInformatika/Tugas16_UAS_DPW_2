<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    function showlogin(){
        return view('login');
    }

    function loginProcess(){

      if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        return redirect('admin/beranda')->with('success', 'login berhasil');
      }else{
        return back()->with('danger','login anda gagal');
      }
        /*
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        $user = Auth::user();
        if($user->level == 1) return redirect('beranda/admin')->with('success', 'login berhasil');
        if($user->level == 0) return redirect('beranda/pengguna')->with('success', 'login berhasil');
		}else{
			return back()->with('danger', 'Login gagal, Silahkan cek email dan password anda');
		}
*/
/*
    $email = request('email');
    $user = Admin::where('email', $email)->first();
    if ($user) {
      $guard = "admin";
    } else {
      $user = Pengguna::where('email', $email)->first();
      if ($user) {
        $guard = "pengguna";
      } else {
        $guard = false;
      }
    }

    if (!$guard) {
      return back()->with('danger', 'email tidak di temukan di database');
    } else {
      if (Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])) {
        return redirect("beranda/$guard")->with('success', 'login berhasil');
      } else {
        return back()->with('danger', 'login gagal, silakan cek pasword dan email anda');
      }
    }
    */
    }

    function logout(){
      Auth::logout();
      return redirect('login');
    }

    function register(){
        return view('register');
    }

    function forgot(){
        return view('forgot');
    }
}