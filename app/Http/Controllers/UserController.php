<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'surname' => 'required|max:50',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:6',
            'address' => 'required|max:30',
            'postal_code' => 'required|max:6',
            'city' => 'required|max:20',
            'role_id' => 'required|exists:roles,id',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $offer = User::create($validatedData);
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'surname' => 'required|max:50',
            'email' => 'required|email|unique:users,email,'.$user->id.'|max:50',
            'password' => 'nullable|min:6',
            'address' => 'required|max:30',
            'postal_code' => 'required|max:6',
            'city' => 'required|max:20',
            'role_id' => 'required|exists:roles,id',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $user->update($validatedData);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
