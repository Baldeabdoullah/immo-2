<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\Property;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $options = Option::all();
        $categories = Category::all();
        $properties = Property::all();
        return view('admin', compact('options', 'categories', 'properties'));
    }
}
