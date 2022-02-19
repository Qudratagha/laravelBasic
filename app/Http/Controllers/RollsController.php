<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rolls;
use Illuminate\Http\Request;


class RollsController extends Controller
{

    public function index()
    {
        $rolls = Rolls::all();
        return view('rolls.index',compact('rolls'));
    }
    public function create()
    {
        return view('rolls.create');
    }
    public function store(Request $request)
    {
        Rolls::create($request->all());
        return redirect(route('rolls.index'));
    }
    public function show(Rolls $rolls)
    {
        //
    }
    public function edit(Rolls $roll)
    {
        return view('rolls.edit',compact('roll'));
    }
    public function update(Request $request, Rolls $roll)
    {
        $roll->update($request->all());
        return redirect(route('rolls.index'));
    }
    public function destroy(Rolls $roll)
    {
        $roll->delete();
        return redirect(route('rolls.index'));
    }
}
