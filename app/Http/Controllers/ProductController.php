<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product.index',compact('product'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect(route('product.index'));
    }
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect(route('product.index'));
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));
    }
}
