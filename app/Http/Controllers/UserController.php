<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\Category;
use App\Models\Rolls;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Session\Store;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;
use function Psr\Log\alert;

class UserController extends Controller
{
    public function index()
    {

       dd( $users = User::first());
        return view('users.index',compact('users'));
    }

    public function create()
    {
        $rolls = Rolls::all();
        return view('users.create',compact('rolls'));
    }
    public function store(StoreUserRequest $request)
    {
        $hash_password =  Hash::make($request->password);
        $request['password'] = $hash_password;

        $user = User::create($request->all());
        $user->rolls()->attach($request->get('roll'));
        $request->session()->flash('message','User Added SuccessFully');
        return redirect(route('users.index'));
    }
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function edit(User $user)
    {
        $rolls = Rolls::all();
        return view('users.edit',compact('user','rolls'));
    }
    public function update(UserEditRequest $request, User $user)
    {
        $user->update($request->all());
        $user->rolls()->detach();
        $user->rolls()->attach($request->get('roll'));
        $request->session()->flash('message','User Updated SuccessFully');
        return redirect(route('users.index'));
    }
    public function destroy(User $user)
    {
        if ($user->products()->first()) {
           $user->products()->delete();
        }
            if ($user->categories()->first()) {
            foreach ($user->categories as $category)
            {
                $category->load('products');
                $category->products()->delete();
            }
        }
        $user->categories()->delete();
        $user->delete();
        return redirect(route('users.index'));

    }
}
