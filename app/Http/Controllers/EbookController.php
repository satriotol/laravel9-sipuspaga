<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Ebook;
use App\Models\TemporaryFile;

class EbookController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:ebook-index|ebook-create|ebook-edit|ebook-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:ebook-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:ebook-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:ebook-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $ebooks = Ebook::paginate();
        return view('backend.ebook.index', compact('ebooks'));
    }
    public function create()
    {
        return view('backend.ebook.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required'
        ]);
        $file = TemporaryFile::where('filename', $request->image)->first();
        if ($file) {
            $data['file'] = $file->filename;
            $file->delete();
        };
        Ebook::create($data);
        session()->flash('success');
        return redirect(route('ebook.index'));
    }
    public function edit(Ebook $ebook)
    {
        return view('backend.ebook.create', compact('ebook'));
    }
    public function update(Request $request, Ebook $ebook)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'nullable'
        ]);
        $file = TemporaryFile::where('filename', $request->image)->first();
        if ($file) {
            $data['file'] = $file->filename;
            $file->delete();
        };
        $ebook->update($data);
        session()->flash('success');
        return redirect(route('ebook.index'));
    }
    public function destroy(Ebook $ebook)
    {
        $ebook->delete();
        session()->flash('success');
        return back();
    }
}
