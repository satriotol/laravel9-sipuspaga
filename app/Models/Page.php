<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Page extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $table = 'pages';

    protected $fillable = ["page_id","name","type","content"];
}
