<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Network extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $table = 'networks';

    protected $fillable = ["name"];
}
