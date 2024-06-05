<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    public function index()
    {
        return view('permission.index');
    }
}
