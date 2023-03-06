<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\DB;

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
        return view('backend.gallery.index', compact('galleries'));
    }
    public function create()
    {
        return view('backend.gallery.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'images' => 'nullable'
        ]);
        DB::beginTransaction();
        try {
            $gallery = Gallery::create($data);
            foreach ($request->images as $image) {
                $images = TemporaryFile::where('filename', $image)->first();
                if ($images) {
                    $data['images'] = $images->filename;
                    GalleryImage::create([
                        'gallery_id' => $gallery->id,
                        'image' => $data['images']
                    ]);
                    $images->delete();
                };
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

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
            'title' => 'required',
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
