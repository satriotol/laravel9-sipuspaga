<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Page;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:page-index|page-create|page-edit|page-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:page-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:page-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:page-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $pages = Page::paginate();
        return view('backend.page.index', compact('pages'));
    }
    public function create()
    {
        $pages = Page::all();
        $types = [
            'Link' => 'Link',
            'Halaman' => 'Halaman'
        ];
        return view('backend.page.create', compact('pages', 'types'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'page_id' => 'nullable',
            'name' => 'required',
            'type' => 'required',
            'content' => 'required'
        ]);
        Page::create($data);
        session()->flash('success');
        return redirect(route('page.index'));
    }
    public function edit(Page $page)
    {
        $pages = Page::all()->pluck('name', 'id');
        $types = [
            'Link' => 'Link',
            'Halaman' => 'Halaman'
        ];
        return view('backend.page.create', compact('page', 'pages', 'types'));
    }
    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'page_id' => 'nullable',
            'name' => 'required',
            'type' => 'required',
            'content' => 'required'
        ]);
        $page->update($data);
        session()->flash('success');
        return redirect(route('page.index'));
    }
    public function destroy(Page $page)
    {
        $page->delete();
        session()->flash('success');
        return back();
    }
}
