<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = "penjualan";

    public function obat(){
        return $this->belongsTo(Obat::class,'id_harga');
    }
    public function jenis(){
        return $this->belongsTo(Jenis::class,'id_jenis');
    }

    public function Jumlah(){
        return $this->hasMany(Obat::class);
    }

}
