<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){

        return view("auth.login");
    }

    public function showRegisterForm(){

        return view("auth.register");
    }

    public function showLogoutForm(){

        return view("auth.logout");
    }

    public function showRegisterCompForm(){

        return view("auth.RegisterComp");
    }
    
    // public function showSiteRuleForm(){

    //     return view("auth.SiteRule");
    // }

    // public function authorize():bool
    // {
    //     return true;
    // }
}
