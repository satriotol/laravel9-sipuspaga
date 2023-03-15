<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:setting-index|setting-create|setting-edit|setting-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:setting-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:setting-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:setting-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $setting = Setting::first();
        if ($setting) {
            return view('backend.setting.create', compact('setting'));
        } else {
            return view('backend.setting.create');
        }
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
            'logo' => 'required',
            'pengertian' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
            'tugas_fungsi' => 'required',
            'slider_image' => 'required',
        ]);
        $logo = TemporaryFile::where('filename', $request->logo)->first();
        if ($logo) {
            $data['logo'] = $logo->filename;
            $logo->delete();
        };
        $slider_image = TemporaryFile::where('filename', $request->slider_image)->first();
        if ($slider_image) {
            $data['slider_image'] = $slider_image->filename;
            $slider_image->delete();
        };
        Setting::create($data);
        session()->flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            'logo' => 'nullable',
            'pengertian' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
            'tugas_fungsi' => 'required',
            'slider_image' => 'nullable',
        ]);
        $logo = TemporaryFile::where('filename', $request->logo)->first();
        if ($logo) {
            $data['logo'] = $logo->filename;
            $logo->delete();
        };
        $slider_image = TemporaryFile::where('filename', $request->slider_image)->first();
        if ($slider_image) {
            $data['slider_image'] = $slider_image->filename;
            $slider_image->delete();
        };
        $setting->update($data);
        session()->flash('success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
