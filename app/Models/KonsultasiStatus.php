<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiStatus extends Model
{
    use HasFactory;

    protected $fillable = ['konsultasi_id', 'status_id', 'user_id', 'description', 'file'];

    public function konsultasi()
    {
        return $this->belongsTo(Konsultasi::class, 'konsultasi_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
