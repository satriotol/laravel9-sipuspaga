<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\GalleryImage;

class GalleryImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:gallery_image-index|gallery_image-create|gallery_image-edit|gallery_image-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:gallery_image-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:gallery_image-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:gallery_image-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $gallery_images = GalleryImage::paginate();
        return view('backend.gallery_image.index',compact('gallery_images'));
    }
    public function create()
    {
        return view('backend.gallery_image.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([

        ]);
        GalleryImage::create($data);
        session()->flash('success');
        return redirect(route('gallery_image.index'));
    }
    public function edit(GalleryImage $gallery_image)
    {
        return view('backend.gallery_image.create', compact('gallery_image'));
    }
    public function update(Request $request, GalleryImage $gallery_image)
    {
        $data = $request->validate([
        ]);
        $gallery_image->update($data);
        session()->flash('success');
        return redirect(route('gallery_image.index'));
    }
    public function destroy(GalleryImage $gallery_image)
    {
        $gallery_image->delete();
        session()->flash('success');
        return back();
    }
}