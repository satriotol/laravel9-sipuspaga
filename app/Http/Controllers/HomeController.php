<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('sliders'));
    }
}
