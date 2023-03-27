<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'born_place', 'birth', 'gender', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function age()
    {
        $tanggal_lahir = Carbon::parse($this->birth);
        $usia = $tanggal_lahir->age;
        return $usia;
    }
}
