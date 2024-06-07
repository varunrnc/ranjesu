<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        $roles = Role::get();
        return view('admin.permission.index')->with('permissions', $permissions)->with('roles', $roles);
    }

    public function store(Request $request) 
    {
        $request->validate([
            'permission_name' => 'required|max:80',
            'key' => 'required|unique:permissions'
        ]);

        $permissions = new Permission();
        $permissions->name = $request->permission_name;
        $permissions->key = $request->key;
        $roles = $request['roles'];
        $permissions->save();
        if(!empty($request['roles']))
        {
            foreach($roles as $role) {
                $r = Role::Where('id', '=', $role)->firstOrFail();
                $permission = Permission::Where('key', '=', $request->key)->first();
                $r->givePermissionTo($permission);
            }
        }
        return redirect()->route('admin.permission')->with('success', 'Permission Added Successfully');
    }

    public function destroy(Request $request)
    {
        $permission = Permission::find($request->id);
        $permission->delete();
        return redirect()->route('admin.permission')->with('success', 'Permission Deleted Successfully');
    }
}
