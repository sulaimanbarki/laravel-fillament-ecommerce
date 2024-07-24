<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    function loadSubcategories($category)
    {
        return \App\Models\SubCategory::where('category_id', $category)->pluck('name', 'id');
    }
}
