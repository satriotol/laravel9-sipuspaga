<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiStatus extends Model
{
    use HasFactory;

    protected $fillable = ['konsultasi_id', 'status_id', 'user_id', 'description', 'file'];
}
