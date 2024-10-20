<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Services;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function categories()
    {
        return Category::all();
    }

    public function filters(Request $request)
    {
        $categoryId = $request->get('category');
        return Services::where('category_id', $categoryId)->pluck('name');
    }
}

