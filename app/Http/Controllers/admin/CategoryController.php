<?php

namespace App\Http\Controllers\admin;

use App\Models\Option;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $options = Option::all();
        $categories = Category::all();
        $properties = Property::all();
        return view('admin.categories.index', compact('options', 'categories', 'properties'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $imageName = $request->image->store('posts');
        Category::create([
            'name' => $request->name,
            'image' => $imageName
        ]);
        return redirect('admin')->with('success', 'Cathégorie a été crée');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $updatecategory = ([
            'name' => $request->name
        ]);
        if ($request->image != null) {
            $imageName = $request->image->store('posts');
            $updatecategory = array_merge($updatecategory, ([
                'image' => $imageName
            ]));
        }

        $category->update($updatecategory);
        return redirect('admin')->with('success', 'Cathégorie a été modifié');
    }

    public function destroy(Category $category)
    {
        if ($category->properties()->count() > 0) {
            return redirect('admin')->with('success', 'Attention! la cathegorie contient des propriétés');
        }
        $category->delete();
        return redirect('admin')->with('success', 'Cathégorie a été suprimé');
    }
}
