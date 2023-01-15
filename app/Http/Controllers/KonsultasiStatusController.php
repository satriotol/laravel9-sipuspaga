<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\KonsultasiStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'konsultasi_id' => 'nullable',
            'status_id' => 'required',
            'user_id' => 'nullable',
            'description' => 'nullable',
        ]);
        $data['user_id'] = Auth::user()->id;
        $konsultasiStatus = KonsultasiStatus::create($data);
        $whatsapp = new WhatsappController;
        $whatsapp->kirimPesan($data['description'], $konsultasiStatus->konsultasi->user->phone_number);
        session()->flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KonsultasiStatus  $konsultasiStatus
     * @return \Illuminate\Http\Response
     */
    public function show(KonsultasiStatus $konsultasiStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KonsultasiStatus  $konsultasiStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(KonsultasiStatus $konsultasiStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KonsultasiStatus  $konsultasiStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KonsultasiStatus $konsultasiStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KonsultasiStatus  $konsultasiStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(KonsultasiStatus $konsultasiStatus)
    {
        $konsultasiStatus->delete();
        session()->flash('success');
        return back();
    }
}
