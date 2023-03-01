<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'max:10000',
            'logo' => 'image',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('file', $file_name, 'public_uploads');

            TemporaryFile::create([
                'filename' => $file
            ]);
            return $file;
        };
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('image', $file_name, 'public_uploads');

            TemporaryFile::create([
                'filename' => $file
            ]);
            return $file;
        };
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('logo', $file_name, 'public_uploads');

            TemporaryFile::create([
                'filename' => $file
            ]);
            return $file;
        };
    }
    public function revert(Request $request)
    {
        $temporaryFile = TemporaryFile::where('filename', $request->getContent())->first();
        $temporaryFile->delete();
    }
}
