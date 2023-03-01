<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Berita extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $table = 'beritas';

    protected $fillable = ["user_id", "berita_category_id", "title", "content", "image"];

    public function berita_category()
    {
        return $this->belongsTo(BeritaCategory::class, 'berita_category_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
