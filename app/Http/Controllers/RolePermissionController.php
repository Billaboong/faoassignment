<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function index() {

        $allRoles = Role::all()->pluck('name');
        $allPermissions = Permission::all()->pluck('name');
        
        return view('rolepermission.index', compact('allRoles','allPermissions'));
    }

    /**
     * Handle an incoming  request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $role = Role::create([
            'name' => $request->name,
        ]);


        return redirect('/rolepermissions')->with('status', 'Success!');
        //return redirect(route('rolepermissions', absolute: false));
    }

     /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function storepermission(Request $request): RedirectResponse
    {
        
        $request->validate([
            'permission' => ['required', 'string', 'max:255'],
        ]);

        $role = Permission::create([
            'name' => $request->permission,
        ]);

        
        return redirect('/rolepermissions')->with('status', 'Success!');
        //return redirect(route('rolepermissions', absolute: false));
    }

    public function assignpermission(Request $request): RedirectResponse
    {
        $request->validate([
            'permissions' => ['required'],
            'roles' => ['required'],
        ]);

        //Assign role to permissions
        $role = Role::findByName($request->roles);
        $role->givePermissionTo($request->permissions);

        
        return redirect('/rolepermissions')->with('status', 'Success!');
        //return redirect(route('rolepermissions', absolute: false));
    }

}