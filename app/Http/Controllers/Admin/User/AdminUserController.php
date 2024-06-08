<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function index()
    {
        // if (\Auth::user()->can('see_user')) {
        //     $users = User::WhereNotIn('id', [Auth::user()->id])->WhereNotIn('type', ['admin', 'super admin'])->get();
        //     return view('admin.user.index', compact('users'));
        // }else{
        //     return back();
        // }
    }
}
