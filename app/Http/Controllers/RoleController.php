<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Role::with('permissions')->get();
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return [
            'permissions' => $permissions,
        ];
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        // Create the role with guard name as 'web'
        $role = Role::create(['name' => $request->name, 'guard_name' => 'web']);

        // Ensure each permission exists before assigning
        if (!empty($request->permissions)) {
            foreach ($request->permissions as $permissionName) {
                Permission::firstOrCreate([
                    'name' => $permissionName,
                    'guard_name' => 'web'
                ]);
            }

            // Assign permissions to role
            $role->syncPermissions($request->permissions);
        }

        return response()->json($role, 201);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($role)
    {
        // Get all permissions
        $permissions = Permission::all();
        $role=Role::with('permissions')->find($role);
        // Get assigned permissions for the role
        return response()->json([
            'role' => $role,
            'all_permissions' => $permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'array',
        ]);

        // Find the role
        $role = Role::with('permissions')->findOrFail($id);

        // Update role name
        $role->update(['name' => $request->name]);

        // Sync permissions (replace old ones with new ones)
        $role->syncPermissions($request->permissions);
        $rolePermissions = $role->permissions->pluck('name')->toArray();

        return response()->json([
            'message' => 'Role updated successfully',
            'role' => $role,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return response()->json([
            'message' => 'Role deleted successfully',
            'all_roles'=>Role::with('permissions')->get(),
        ], 200);

    }
}
