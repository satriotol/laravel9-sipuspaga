<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaCategory;
use App\Models\Contact;
use App\Models\Link;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share('contactPhone', Contact::getPhoneContact());
        view()->share('links', Link::orderBy('id', 'desc')->get());
        view()->share('contacts', Contact::orderBy('id', 'desc')->get());
    }
    public function index()
    {
        $setting = Setting::first();
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('sliders', 'setting'));
    }
    public function berita()
    {
        $beritas = Berita::paginate(1);
        $beritaCategories = BeritaCategory::all();
        return view('frontend.berita.berita', compact('beritas', 'beritaCategories'));
    }
}
