<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $table = "pembelian";

    
    public function obat(){
        return $this->belongsTo(Obat::class,'id_nama');
    }
    public function supplai(){
        return $this->belongsTo(Supplier::class,'id_supplai');
    }
    
}
