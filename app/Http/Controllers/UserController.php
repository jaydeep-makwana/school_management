<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function setting()
    {
        return view('settings.index');
    }

    public function updateSetting(Request $request)
    {
        if (!empty($request->profile)) {
            $fileName = $request->file('profile')->getClientOriginalName();
            $img_path = $request->file('profile')->storeAs('images', $fileName, 'public');
            Setting::where('key', 'profile')->update(['value' => asset($img_path)]);
        }
        if (!empty($request->favicon)) {
            $fileName = $request->file('favicon')->getClientOriginalName();
            $img_path = $request->file('favicon')->storeAs('images', $fileName, 'public');
            Setting::where('key', 'favicon')->update(['value' => asset($img_path)]);
        }
        if (!empty($request->logo)) {
            $fileName = $request->file('logo')->getClientOriginalName();
            $img_path = $request->file('logo')->storeAs('images', $fileName, 'public');
            Setting::where('key', 'logo')->update(['value' => asset($img_path)]);
        }
        if (!empty($request->footer_content)) {
            Setting::where('key', 'footer_content')->update(['value' => $request->footer_content]);
        }


        return redirect()->back();
    }
}
