<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSliderController extends Controller
{
    public function index()
    {
        return view('admin.slider.index');
    }
}
