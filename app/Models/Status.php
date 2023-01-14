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
    public function getStatus()
    {
        if ($this->is_waiting) {
            return 'Menunggu';
        } elseif ($this->is_process) {
            return 'Proses';
        } elseif ($this->is_done) {
            return 'Selesai';
        } else {
            return 'Ditolak';
        }
    }
}
