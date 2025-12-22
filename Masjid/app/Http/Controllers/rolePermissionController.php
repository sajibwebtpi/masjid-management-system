<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\roleRequest;
use App\Http\Requests\permissionRequest;

class rolePermissionController extends Controller
{
    public function createRole(roleRequest $request)
    {
        Role::create($request->validated());
        return back()->with('success' , 'Role created successfully!');
    }

    public function createPermission(permissionRequest $request)
    {
        Permission::create($request->validated());
        return back()->with('success' , 'Permission create successfully!');
    }

    public function assignPermissionToRole(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'role' => 'required|string|exists:roles,name',
            'permission' => 'required|string|exists:permissions,name'
        ]);

        $role = Role::where('name' , $data['role'])->first();
        $role->givePermission($data['permission']);

        return response()->json([
            'message' => 'Assign permission to role successfully!',
            'data' => $data,
        ]);
    }

    public function assignRoleToUser(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|string|exists:roles,name'
        ]);

        $user = User::findOrFail($data['user_id']);

        $user->addRole($data['role']);

        return response()->json([
        'message' => 'Assign role to  user successfully!',
        'data' => $data        
        ]);
    }
}
