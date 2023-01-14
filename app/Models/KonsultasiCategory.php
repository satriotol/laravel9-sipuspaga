<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'opd_id'];

    public function opd()
    {
        return $this->belongsTo(Opd::class, 'opd_id', 'id');
    }
    public function konsultasis()
    {
        return $this->hasMany(Konsultasi::class, 'konsultasi_category_id', 'id');
    }
}
