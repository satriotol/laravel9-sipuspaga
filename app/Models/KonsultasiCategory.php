<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'opd_id'];
}
