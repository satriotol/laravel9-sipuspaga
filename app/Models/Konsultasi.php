<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'konsultasi_category_id', 'message', 'file'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function konsultasi_category()
    {
        return $this->belongsTo(KonsultasiCategory::class, 'konsultasi_category_id', 'id');
    }
}
