<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Gallery extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $table = 'galleries';

    protected $fillable = ["title"];
}
