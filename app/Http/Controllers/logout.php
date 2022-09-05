<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    function admin_logout()
        {
            if (session()->has('email')) {
                session()->pull('email');
                return redirect('login');
            }
        }
    
}
