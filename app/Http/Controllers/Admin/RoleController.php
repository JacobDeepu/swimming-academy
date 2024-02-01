<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('view a role');

        $roles = Role::latest();
        $roles = $roles->paginate(5);

        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $this->authorize('create a role');

        $permissions = Permission::all();

        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create a role');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = Role::create($validated);

        if (! empty($request->permissions)) {
            $role->givePermissionTo($request->permissions);
        }

        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('view a role');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role): View
    {
        $this->authorize('update a role');

        $permissions = Permission::all();
        $role_has_permissions = array_column(json_decode($role->permissions, true), 'id');

        return view('admin.role.edit', compact('role', 'permissions', 'role_has_permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role): RedirectResponse
    {
        $this->authorize('update a role');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $role->update($validated);
        $permissions = $request->permissions ?? [];
        $role->syncPermissions($permissions);

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): RedirectResponse
    {
        $this->authorize('delete a role');

        $role->delete();

        return redirect()->route('role.index');
    }
}
