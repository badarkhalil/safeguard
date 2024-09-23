<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role_name' => 'admin',
        ])) {
            $request->session()->regenerate();
            return view('Admin.dashboard.dashboard');
        }
        return redirect()->back()->with('error','The provided credentials do not match our records.');
    }
    public function index(){
        return view('Admin.dashboard.dashboard');
    }

    public function users(){
        $users = User::where('role_name','user')->get();
        return view('Admin.user.index',compact('users'));
    }
}
