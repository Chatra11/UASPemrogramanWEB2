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

    public function jual(){
        return $this->hasMany(Obat::class);
    }

}
