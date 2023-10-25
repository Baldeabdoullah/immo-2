<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class FrontPropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('front.biens', compact('properties'));
    }

    public function show($id)
    {
        $properties = Property::all();
        $property = Property::findOrFail($id);
        return view('front.bien', compact('property', 'properties'));
    }

    public function infos()
    {
        return view('front.infos');
    }

    public function services()
    {
        return view('front.services');
    }
    public function contacte()
    {
        return view('front.contacte');
    }

    public function store(Request $request)
    {
    }
}
