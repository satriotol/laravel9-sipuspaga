<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
    public function konsultasi_statuses()
    {
        return $this->hasMany(KonsultasiStatus::class, 'konsultasi_id', 'id')->orderBy('created_at', 'desc');
    }
    public function konsultasi_status()
    {
        return $this->hasOne(KonsultasiStatus::class, 'konsultasi_id', 'id')->latest();
    }

    public static function getKonsultasis()
    {
        if (Auth::user()->user_detail) {
            return Konsultasi::where('user_id', Auth::user()->id);
        } else {
            return Konsultasi::query();
        }
    }
}
