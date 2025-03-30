<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('dashboard');
    }
    public function userManagement()
    {
        $users = User::all(); // Fetch all users from the database
        return view('laravel-examples.user-management', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store the new user in the database
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:2,3', // Only allow role 2 (Student) or 3 (Warder)
        ]);

        // Create and save user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Redirect to user management page
        return redirect()->route('user-management')->with('success', 'User created successfully!');
    }
}
