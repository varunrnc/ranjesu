<?php

namespace App\Http\Controllers\Admin\NewsEvents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNewsEventsController extends Controller
{
    public function index()
    {
        return view('admin.newsevents.index');
    }
}
