<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function index()
    {
        return view('admin.team.index');
    }
}
