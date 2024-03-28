<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
//        return $categories;
        return view('category.index', compact('categories'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'boolean'
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'is_active' => $request->has('is_active') ? 1 : 0
        ]);

        return redirect('/category')->with('status', 'Category Created');
    }

    public function edit(int $id){
        $category = Category::find($id);
//        return $category;
        if (!$category) {
            return redirect('/category')->with('error', 'Category not found');
        }
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'category_name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'boolean'
        ]);

        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'is_active' => $request->has('is_active') ? 1 : 0
        ]);

        return redirect('/category')->with('status', 'Category Updated');
    }

    public function destroy(int $id){
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/category')->with('status', 'Category Deleted');
    }

}
