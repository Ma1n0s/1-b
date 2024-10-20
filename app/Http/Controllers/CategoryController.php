<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function up(){
        $request->validate([
            'name' => 'required|string',
        ]);
    }
}
