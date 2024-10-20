<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::where('is_confirmed', true)->get();
        return response()->json($companies);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:companies,email', 
            'name_comp' => 'required|string|max:255',
            'inn_comp' => 'required|string|max:255',
            'is_confirmed' => 'boolean',
        ]);

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'name_comp' => $request->name_comp,
            'inn_comp' => $request->inn_comp,
            'is_confirmed' => $request->is_confirmed ?? false,
        ]);

        return response()->json($company, 201); 
        }
}