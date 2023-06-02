<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databarang extends Model
{
    use HasFactory;

    public function databarangs()
    {
        return $this->belongsTo(Satuan::class);
    }
}
