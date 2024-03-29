<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaCategory;
use App\Models\Contact;
use App\Models\Ebook;
use App\Models\Gallery;
use App\Models\Link;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share('setting', Setting::first());
        view()->share('contactPhone', Contact::getPhoneContact());
        view()->share('links', Link::orderBy('id', 'desc')->get());
        view()->share('contacts', Contact::orderBy('id', 'desc')->get());
    }
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        $beritas = Berita::orderBy('id', 'desc')->paginate(3);
        return view('frontend.index', compact('sliders', 'beritas'));
    }
    public function berita(Request $request)
    {
        $berita_category_id = $request->berita_category_id;
        $title = $request->title;
        $beritas = Berita::query();
        if ($title) {
            $beritas->where('title', 'LIKE', '%' . $title . '%');
        }
        if ($berita_category_id) {
            $beritas->where('berita_category_id', $berita_category_id);
        }
        $beritas = $beritas->latest()->paginate();
        $beritaCategories = BeritaCategory::all();
        $request->flash();
        return view('frontend.berita.berita', compact('beritas', 'beritaCategories'));
    }
    public function detailBerita(Berita $beritum)
    {
        $beritas = Berita::where('id', '!=', $beritum->id)->paginate(3);
        return view('frontend.berita.detailBerita', compact('beritum', 'beritas'));
    }
    public function ebook()
    {
        $ebooks = Ebook::all();
        return view('frontend.ebook.ebook', compact('ebooks'));
    }
    public function galeri()
    {
        $galleries = Gallery::paginate();
        return view('frontend.galeri.galeri', compact('galleries'));
    }
    public function detailGaleri(Gallery $gallery)
    {
        return view('frontend.galeri.detailGaleri', compact('gallery'));
    }
}
