<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EbookController extends Controller
{
    public function getEbook()
    {
        $ebooks = Ebook::query();

        return DataTables::of($ebooks)
            ->addColumn('created_at', function ($ebook) {
                return $ebook->created_at->format('Y-m-d');
            })
            ->addColumn('action', function ($user) {
                return '<a href="' . asset('uploads/' . $user->file) . '" target="blank"><i class="fas fa-file"></i></a>';
            })
            ->make(true);
    }
}
