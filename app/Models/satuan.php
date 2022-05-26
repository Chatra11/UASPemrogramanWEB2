<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    use HasFactory;
    protected $table = "satuan";

    public function obat(){
        return $this->hasMany(Obat::class);
    }
}
