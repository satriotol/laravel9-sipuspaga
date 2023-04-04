<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiCategory;
use App\Models\Network;
use App\Models\Opd;
use App\Models\User;
use Illuminate\Http\Request;

class KonsultasiCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:konsultasiCategory-index|konsultasiCategory-create|konsultasiCategory-edit|konsultasiCategory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:konsultasiCategory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:konsultasiCategory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:konsultasiCategory-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $konsultasiCategories = KonsultasiCategory::all();
        return view('backend.konsultasiCategory.index', compact('konsultasiCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $networks = Network::all();
        return view('backend.konsultasiCategory.create', compact('networks'));
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
            'name' => 'required',
            'network_id' => 'required',
        ]);
        $konsultasiCategory = KonsultasiCategory::create($data);
        $konsultasiCategory->networks()->sync($request->network_id);
        session()->flash('success');
        return redirect(route('konsultasiCategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KonsultasiCategory  $konsultasiCategory
     * @return \Illuminate\Http\Response
     */
    public function show(KonsultasiCategory $konsultasiCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KonsultasiCategory  $konsultasiCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(KonsultasiCategory $konsultasiCategory)
    {
        $networks = Network::all();
        return view('backend.konsultasiCategory.create', compact('konsultasiCategory', 'networks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KonsultasiCategory  $konsultasiCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KonsultasiCategory $konsultasiCategory)
    {
        $data = $request->validate([
            'name' => 'required',
            'network_id' => 'required'
        ]);
        $konsultasiCategory->update($data);
        $konsultasiCategory->networks()->sync($request->network_id);
        session()->flash('success');
        return redirect(route('konsultasiCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KonsultasiCategory  $konsultasiCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(KonsultasiCategory $konsultasiCategory)
    {
        $konsultasiCategory->delete();
        session()->flash('success');
        return back();
    }
}
