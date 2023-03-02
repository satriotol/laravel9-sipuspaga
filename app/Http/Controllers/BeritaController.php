<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Berita;
use App\Models\BeritaCategory;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:berita-index|berita-create|berita-edit|berita-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:berita-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:berita-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:berita-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $beritas = Berita::paginate();
        return view('backend.berita.index', compact('beritas'));
    }
    public function create()
    {
        $beritaCategories = BeritaCategory::all()->pluck('name', 'id');
        return view('backend.berita.create', compact('beritaCategories'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'berita_category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);
        $data['user_id'] = Auth::user()->id;
        $image = TemporaryFile::where('filename', $request->image)->first();
        if ($image) {
            $data['image'] = $image->filename;
            $image->delete();
        };
        Berita::create($data);
        session()->flash('success');
        return redirect(route('berita.index'));
    }
    public function edit(Berita $beritum)
    {
        $beritaCategories = BeritaCategory::all()->pluck('name', 'id');
        return view('backend.berita.create', compact('beritum', 'beritaCategories'));
    }
    public function update(Request $request, Berita $beritum)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'berita_category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable'
        ]);
        $data['user_id'] = Auth::user()->id;
        $image = TemporaryFile::where('filename', $request->image)->first();
        if ($image) {
            $data['image'] = $image->filename;
            $image->delete();
        };
        $beritum->update($data);
        session()->flash('success');
        return redirect(route('berita.index'));
    }
    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        session()->flash('success');
        return back();
    }
}
