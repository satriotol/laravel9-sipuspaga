<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Network;

class NetworkController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:network-index|network-create|network-edit|network-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:network-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:network-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:network-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $networks = Network::paginate();
        return view('backend.network.index', compact('networks'));
    }
    public function create()
    {
        return view('backend.network.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        Network::create($data);
        session()->flash('success');
        return redirect(route('network.index'));
    }
    public function edit(Network $network)
    {
        return view('backend.network.create', compact('network'));
    }
    public function update(Request $request, Network $network)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        $network->update($data);
        session()->flash('success');
        return redirect(route('network.index'));
    }
    public function destroy(Network $network)
    {
        $network->delete();
        session()->flash('success');
        return back();
    }
}
