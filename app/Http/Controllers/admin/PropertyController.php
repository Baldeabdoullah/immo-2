<?php

namespace App\Http\Controllers\admin;

use App\Models\Option;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function index()
    {
        $options = Option::all();
        $categories = Category::all();
        $properties = Property::all();
        return view('admin.properties.index', compact('options', 'categories', 'properties'));
    }

    public function create()
    {
        $categories = Category::all();
        $options = Option::all();
        return view('admin.properties.create', compact('options', 'categories'));
    }

    public function store(Request $request)
    {
        $imageName1 = $request->image1->store('posts');
        $imageName2 = $request->image2->store('posts');
        $imageName3 = $request->image3->store('posts');
        $imageName4 = $request->image4->store('posts');

        $property = Property::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'surface' => $request->surface,
            'piece' => $request->piece,
            'room' => $request->room,
            'ville' => $request->ville,
            'adress' => $request->adress,
            'etage' => $request->etage,
            'image1' => $imageName1,
            'image2' => $imageName2,
            'image3' => $imageName3,
            'image4' => $imageName4,
        ]);
        $property->options()->attach($request->options);
        return redirect('admin')->with('success', 'Propriété crée');
    }

    public function edit(Property $property)
    {
        $options = Option::all();
        $categories = Category::all();
        return view('admin.properties.edit', compact('options', 'categories', 'property'));
    }

    public function update(Request $request, Property $property)
    {

        $updateProperty = ([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'surface' => $request->surface,
            'piece' => $request->piece,
            'room' => $request->room,
            'ville' => $request->ville,
            'adress' => $request->adress,
            'etage' => $request->etage,
        ]);

        if ($request->image1 && $request->image2 && $request->image3 && $request->image4 != null) {
            $imageName1 = $request->image1->store('posts');
            $imageName2 = $request->image2->store('posts');
            $imageName3 = $request->image3->store('posts');
            $imageName4 = $request->image4->store('posts');
            $updateProperty = array_merge($updateProperty, [
                'image1' => $imageName1,
                'image2' => $imageName2,
                'image3' => $imageName3,
                'image4' => $imageName4,
            ]);
        }

        $property->update($updateProperty);
        $property->options()->sync($request->options);
        return redirect('admin')->with('success', 'Propriété mise à jour');
    }

    public function destroy(Request $request, Property $property)
    {

        $property->delete();
        return redirect('admin')->with('success', 'Propriété suprimé');
    }
}
