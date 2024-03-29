<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Support\Str;

class KonsultasiCategoryNetwork extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $table = 'konsultasi_category_network';

    protected $fillable = ["konsultasi_category_id", "network_id"];

    public function konsultasi_category()
    {
        return $this->belongsTo(KonsultasiCategory::class, 'konsultasi_category_id');
    }
    public function network()
    {
        return $this->belongsTo(Network::class, 'network_id');
    }
}
