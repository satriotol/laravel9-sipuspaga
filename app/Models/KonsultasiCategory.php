<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    // public function network()
    // {
    //     return $this->belongsTo(Network::class, 'network_id', 'id');
    // }
    public function networks()
    {
        return $this->belongsToMany(Network::class, 'konsultasi_category_network');
    }
    public function konsultasis()
    {
        return $this->hasMany(Konsultasi::class, 'konsultasi_category_id', 'id');
    }
}
