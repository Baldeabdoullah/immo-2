<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $properties = Property::inRandomOrder()->limit(3)->get();
        $categories = Category::all();
        return view('accueil', compact('properties', 'categories'));
    }
}
