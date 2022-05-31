<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Obat extends Model
{
    use HasFactory;
    protected $table = "_obat";
    // protected $fillable = [
    //     'id','Kode_Obat','Nama_obat','id_supplai','id_satuan','Stok','Harga'];

    public function supplier(){
        return $this->belongsTo(Supplier::class,'id_supplai');
    }
    public function satuan(){
        return $this->belongsTo(satuan::class,'id_satuan');
    }
    public function jenis(){
        return $this->belongsTo(Jenis::class,'id_jenis');
    }
    public function jumlah(){
        return $this->belongsTo(Penjualan::class,'id_jumlah');
    }

    public function jual(){
        return $this->hasone(Obat::class);
    }
    public function beli(){
        return $this->hasone(Obat::class);
    }
}
