<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:status-index|status-create|status-edit|status-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:status-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:status-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:status-delete', ['only' => ['destroy']]);
    }
    public function logical($request, $data)
    {
        if ($request->is_waiting) {
            $data['is_waiting'] = 1;
        } else {
            $data['is_waiting'] = null;
        }
        if ($request->is_process) {
            $data['is_process'] = 1;
        } else {
            $data['is_process'] = null;
        }
        if ($request->is_done) {
            $data['is_done'] = 1;
        } else {
            $data['is_done'] = null;
        }
        if ($request->is_declined) {
            $data['is_declined'] = 1;
        } else {
            $data['is_declined'] = null;
        }
        return $data;
    }
    public function index()
    {
        $statuses = Status::all();
        return view('backend.status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.status.create');
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
            'color' => 'required',
            'is_waiting' => 'nullable',
            'is_process' => 'nullable',
            'is_done' => 'nullable',
            'is_declined' => 'nullable',
        ]);
        $data = $this->logical($request, $data);
        Status::create($data);
        session()->flash('success');
        return redirect(route('status.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('backend.status.create', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'is_waiting' => 'nullable',
            'is_process' => 'nullable',
            'is_done' => 'nullable',
            'is_declined' => 'nullable',
        ]);
        $data = $this->logical($request, $data);
        $status->update($data);
        session()->flash('success');
        return redirect(route('status.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();
        session()->flash('success');
        return back();
    }
}
