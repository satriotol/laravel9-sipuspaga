<?php

namespace App\Http\Controllers;

use App\Jobs\KirimWaJob;
use App\Models\Konsultasi;
use App\Models\KonsultasiCategory;
use App\Models\KonsultasiStatus;
use App\Models\Status;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:konsultasi-index|konsultasi-create|konsultasi-edit|konsultasi-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:konsultasi-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:konsultasi-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:konsultasi-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $konsultasis = Konsultasi::getKonsultasis()->get();
        return view('backend.konsultasi.index', compact('konsultasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $konsultasiCategories = KonsultasiCategory::all();
        return view('backend.konsultasi.create', compact('konsultasiCategories'));
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
            'user_id' => 'nullable',
            'konsultasi_category_id' => 'required',
            'message' => 'required',
            'file' => 'nullable',
        ]);
        $data['user_id'] = Auth::user()->id;
        $temporaryFile = TemporaryFile::where('filename', $request->file)->first();
        if ($temporaryFile) {
            $data['file'] = $temporaryFile->filename;
            $temporaryFile->delete();
        };
        $konsultasi = Konsultasi::create($data);
        KonsultasiStatus::create([
            'konsultasi_id' => $konsultasi->id,
            'status_id' => Status::where('is_waiting', 1)->first()->id,
            'user_id' => Auth::user()->id,
            'description' => 'Status Pengajuan Sudah Masuk Sistem',
        ]);
        if ($request->kirimWa) {
            $asset = [
                'SIPUSPAGA, Status Pengajuan Anda Sedang Kami Proses',
                $konsultasi->user->phone_number
            ];
            KirimWaJob::dispatch($asset);
        }
        session()->flash('success');
        return redirect(route('konsultasi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konsultasi $konsultasi)
    {
        $user = Auth::user();
        if (Auth::user()->user_detail) {
            if ($user->id != $konsultasi->user_id) {
                session()->flash('bug', 'Bukan Data Anda');
                return redirect(route('konsultasi.index'));
            }
        }
        $statuses = Status::all();
        return view('backend.konsultasi.show', compact('konsultasi', 'statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsultasi $konsultasi)
    {
        $user = Auth::user();
        if (Auth::user()->user_detail) {
            if ($user->id != $konsultasi->user_id) {
                session()->flash('bug', 'Bukan Data Anda');
                return redirect(route('konsultasi.index'));
            }
        }
        $konsultasiCategories = KonsultasiCategory::all();
        return view('backend.konsultasi.create', compact('konsultasi', 'konsultasiCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konsultasi $konsultasi)
    {
        $data = $request->validate([
            'konsultasi_category_id' => 'required',
            'message' => 'required',
            'file' => 'nullable',
        ]);
        $temporaryFile = TemporaryFile::where('filename', $request->file)->first();
        if ($temporaryFile) {
            $data['file'] = $temporaryFile->filename;
            $temporaryFile->delete();
        };
        $konsultasi->update($data);
        session()->flash('success');
        return redirect(route('konsultasi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsultasi $konsultasi)
    {
        $konsultasi->delete();
        session()->flash('success');
        return back();
    }
}
