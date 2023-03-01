<?php

namespace App\Http\Controllers;

use App\Models\BeritaCategory;
use Illuminate\Http\Request;

class BeritaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:beritaCategory-index|beritaCategory-create|beritaCategory-edit|beritaCategory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:beritaCategory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:beritaCategory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:beritaCategory-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $beritaCategories = BeritaCategory::all();
        return view('backend.beritaCategory.index', compact('beritaCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.beritaCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        BeritaCategory::create($data);
        session()->flash('success');
        return redirect(route('beritaCategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BeritaCategory $beritaCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BeritaCategory $beritaCategory)
    {
        return view('backend.beritaCategory.create', compact('beritaCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeritaCategory $beritaCategory)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        $beritaCategory->update($data);
        session()->flash('success');
        return redirect(route('beritaCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaCategory $beritaCategory)
    {
        $beritaCategory->delete();
        session()->flash('success');
        return back();
    }
}
