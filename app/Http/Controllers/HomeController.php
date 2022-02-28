<?php

namespace App\Http\Controllers;

use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role = Role::create(['name' => 'product']);
        // $permission = Permission::create(['name' => 'product']);
        // auth()->user()->assignRole('admin');
        // auth()->user()->givePermissionTo('product');
        // $role = Role::findById(1);
        // $role->givePermissionTo('setting');
        // $permission = Auth::user()->permissions;
        // dd($permission);
        // $role = Auth::user()->getRoleNames();
        // dd($role);
        return view('home');
    }

    public function product()
    {
        return view('product');
    }

    public function setting()
    {
        $user = User::all();
        $role = Auth::user()->getRoleNames();
        return view('setting', compact('user', 'role'));
    }
}
