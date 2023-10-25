<?php

namespace App\Http\Controllers\admin;

use App\Models\Option;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        $categories = Category::all();
        $properties = Property::all();
        return view('admin.options.index', compact('options', 'categories', 'properties'));
    }

    public function create()
    {
        return view('admin.options.create');
    }

    public function store(Request $request)
    {
        Option::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect('admin')->with('success', 'option crée');
    }

    public function edit(Option $option)
    {
        return view('admin.options.edit', compact('option'));
    }

    public function update(Request $request, Option $option)
    {
        $updateOption = ([
            'name' => $request->name,
            'price' => $request->price
        ]);

        $option->update($updateOption);
        return redirect('admin')->with('success', 'option Modifié');
    }

    public function destroy(Request $request, Option $option)
    {
        $option->delete();
        return redirect('admin')->with('success', 'option suprimé');
    }
}
