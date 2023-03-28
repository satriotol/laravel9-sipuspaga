<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\KonsultasiCategoryNetwork;

class KonsultasiCategoryNetworkController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:konsultasi_category_network-index|konsultasi_category_network-create|konsultasi_category_network-edit|konsultasi_category_network-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:konsultasi_category_network-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:konsultasi_category_network-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:konsultasi_category_network-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $konsultasi_category_networks = KonsultasiCategoryNetwork::paginate();
        return view('backend.konsultasi_category_network.index',compact('konsultasi_category_networks'));
    }
    public function create()
    {
        return view('backend.konsultasi_category_network.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([

        ]);
        KonsultasiCategoryNetwork::create($data);
        session()->flash('success');
        return redirect(route('konsultasi_category_network.index'));
    }
    public function edit(KonsultasiCategoryNetwork $konsultasi_category_network)
    {
        return view('backend.konsultasi_category_network.create', compact('konsultasi_category_network'));
    }
    public function update(Request $request, KonsultasiCategoryNetwork $konsultasi_category_network)
    {
        $data = $request->validate([
        ]);
        $konsultasi_category_network->update($data);
        session()->flash('success');
        return redirect(route('konsultasi_category_network.index'));
    }
    public function destroy(KonsultasiCategoryNetwork $konsultasi_category_network)
    {
        $konsultasi_category_network->delete();
        session()->flash('success');
        return back();
    }
}