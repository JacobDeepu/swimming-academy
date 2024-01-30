<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view a user');

        $users = User::latest();
        $users = $users->paginate(5);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create a user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create a user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $this->authorize('view a user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $this->authorize('update a user');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update a user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->authorize('delete a user');
    }
}
