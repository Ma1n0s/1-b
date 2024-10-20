<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\RegisterCompany;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterCompController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }



    protected function create(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'name_comp' => 'required|string|max:255',
            'inn_comp' => 'required|string|max:255',
        ]);

        return RegisterCompany::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'name_comp' => $data['name_comp'],
            'inn_comp' => $data['inn_comp'],
        ]);
    }
}
