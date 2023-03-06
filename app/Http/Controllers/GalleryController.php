<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:gallery-index|gallery-create|gallery-edit|gallery-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:gallery-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:gallery-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:gallery-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $galleries = Gallery::paginate();
        return view('backend.gallery.index',compact('galleries'));
    }
    public function create()
    {
        return view('backend.gallery.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([

        ]);
        Gallery::create($data);
        session()->flash('success');
        return redirect(route('gallery.index'));
    }
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.create', compact('gallery'));
    }
    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
        ]);
        $gallery->update($data);
        session()->flash('success');
        return redirect(route('gallery.index'));
    }
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        session()->flash('success');
        return back();
    }
}