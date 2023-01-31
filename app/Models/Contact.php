<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['icon', 'name', 'description', 'is_phone'];

    public function getPhoneAttribute()
    {
        if ($this->is_phone == 1) {
            $data = 'Ya';
        } else {
            $data = 'Tidak';
        }
        return $data;
    }
    public static function getPhoneContact()
    {
        return Contact::where('is_phone', 1)->first();
    }
}
