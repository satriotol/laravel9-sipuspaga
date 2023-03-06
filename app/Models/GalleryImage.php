<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class GalleryImage extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $table = 'gallery_images';

    protected $fillable = ["image", "gallery_id"];
}
