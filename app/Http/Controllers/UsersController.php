<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $request->input('roles', []);

        $users = User::whereIn('roles', $roles)->get();

        return response()->json(['users' => $users], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'roles' => 'required|array',
        ]);

        $user = User::create($validatedData);

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

}
