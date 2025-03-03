<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'created_at');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = User::query()
            ->with('roles')
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('role', 'like', "%{$search}%")
                        ->orWhere('current_team_id', 'like', "%{$search}%");
                });
            })
            ->orderBy($orderBy, $sort_by);

        $total = $query->count();

        // Paginate results
        $data = $query->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        return response()->json([
            'data' => $data,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'total' => $total,
            'last_page' => ceil($total / $perPage),
            'search' => $search,
            'order_by' => $orderBy,
            'sort_by' => $sort_by,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return [
            'roles' => Role::with('permissions')->get(),
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated= $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
           'roles' => 'required|array', // Ensure roles is an array
           'roles.*' => 'exists:roles,name',
            'password_confirmation' => 'required|same:password'
        ]);
       $user=User::create([
           'name' => $validated['name'],
           'email' => $validated['email'],
           'password' => Hash::make($validated['password']),
       ]);
        $user->syncRoles($validated['roles']);
        return response()->json([
            'message'=>"User Added Successfully",
            'data' => $user,
        ],201);

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
    public function edit( $id)
    {
        return response()->json([
            User::with('roles')->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$id}", // Allow existing email for this user
            'password' => 'nullable|min:6|confirmed', // Password is optional
            'roles' => 'required|array', // Ensure roles is an array
            'roles.*' => 'exists:roles,name' // Ensure roles exist in DB
        ]);

        // Find user
        $user = User::with('roles')->findOrFail($id);

        // Update user details
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? Hash::make($validated['password']) : $user->password, // Only update if password is provided
        ]);

        // Sync roles
        $user->syncRoles($validated['roles']);

        return response()->json([
            'message' => "User Updated Successfully",
            'data' => $user,
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ], 200);
    }

}
