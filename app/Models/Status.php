<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'color', 'is_waiting', 'is_process', 'is_done', 'is_declined'];

    public function konsultasi_statuses()
    {
        return $this->hasMany(KonsultasiStatus::class, 'status_id', 'id');
    }
}
