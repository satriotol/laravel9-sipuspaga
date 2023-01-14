<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\KonsultasiCategory;
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
        $konsultasis = Konsultasi::paginate();
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
        Konsultasi::create($data);
        $message = "Halo Mbak";

        $message = preg_replace("/(\n)/", "<ENTER>", $message);
        $message = preg_replace("/(\r)/", "<ENTER>", $message);

        $data = array("phone_no" => Auth::user()->phone_number, "key" => "e4d16a0772635a648acd790503fe71a9ebcd9f538952dfbc", "message" => $message);
        $data_string = json_encode($data);
        $ch = curl_init('http://116.203.92.59/api/send_message');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string)
            )
        );
        $result = curl_exec($ch);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsultasi $konsultasi)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsultasi $konsultasi)
    {
        //
    }
}
