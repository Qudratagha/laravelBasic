<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.index',compact('category'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect(route('category.index'));
    }
    public function show($id)
    {
        //
    }
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect(route('category.index'));
    }
    public function destroy(Category $category)
    {
        $category->products()->delete();
        $category->delete();
        return redirect(route('category.index'));
    }

}

