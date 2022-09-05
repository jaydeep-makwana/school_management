<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin_login(Request $input)
    {
        $input->validate([
            'fname' => 'required | min:5 | max:20',
            'lname' => 'required | min:5 | max:24',
            'mobile' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' =>  'required | same:password',
            'code' => 'required'
        ]);

        DB::table('admins')->insert([

            'fname' => $input->input('fname'),
            'lname' => $input->input('lname'),
            'mobile' => $input->input('mobile'),
            'email' => $input->input('email'),
            'password' => $input->input('password'),
            'code' => $input->input('code')
        ]);

        return redirect('login')->with('status', 'you are successfully ragistered..');
    }

    function login(Request $data)
    {
        $data->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $value = $data->input('email');
        $data->session()->put('email', $value);
        return redirect('admin_dashboard');

        // if (Auth::guard('admin')->attempt($data->only('email', 'password'))) {
        //     return   redirect('admin_dashboard');
        // } else {

        //     return   redirect('login');
        // }
    }
}
