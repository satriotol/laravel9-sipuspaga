<?php

namespace App\Http\Controllers;

use App\Jobs\KirimWaJob;
use App\Models\Konsultasi;
use App\Models\KonsultasiStatus;
use App\Models\TemporaryFile;
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
            'file' => 'nullable',
            'kirimWa' => 'nullable'
        ]);
        $data['user_id'] = Auth::user()->id;
        $temporaryFile = TemporaryFile::where('filename', $request->file)->first();
        if ($temporaryFile) {
            $data['file'] = $temporaryFile->filename;
            $temporaryFile->delete();
        };
        $konsultasiStatus = KonsultasiStatus::create($data);
        if ($request->kirimWa) {
            $asset = [
                $data['description']  . "\nDijawab Oleh : " . Auth::user()->name . "\n" . route('konsultasi.show', $konsultasiStatus->konsultasi->uuid),
                $konsultasiStatus->konsultasi->user->phone_number
            ];
            KirimWaJob::dispatch($asset);
        }
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
