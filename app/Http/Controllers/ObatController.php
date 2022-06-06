<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObatRequest;
use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Penjualan;
use App\Models\satuan;
use App\Models\Supplier;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $data_obat = Obat::where('Kode_Obat','LIKE','%'.$keyword.'%')
        ->orWhere('Nama_obat','LIKE','%'.$keyword.'%')
        ->with('supplier','satuan','jenis')
        ->paginate(4);
        $data_obat->withPath('Obat');
        $data_obat->append($request->all());
        return view('obat.index',compact('data_obat','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Obat;
        $supplai = Supplier::all();
        $satuan = satuan::all();
        $jenis = Jenis::all();
        return view('obat.create',compact('model','supplai','satuan','jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObatRequest $request)
    {
        $model = new Obat;
        $jumlah = Penjualan::find($model->id_jumlah);
        $model->Kode_Obat = $request->Kode_Obat;
        $model->id_supplai = $request->id_supplai;
        $model->Nama_obat = $request->Nama_obat;
        $model->id_satuan = $request->id_satuan;
        $model->id_jenis = $request->id_jenis;
        $model->Stok = $request->Stok;        
        $model->Harga = $request->Harga;
        $model->save();

        return redirect('Obat')->with('success','Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Obat::find($id);
        $jumlah = Penjualan::find($model->id_jumlah);
        return view('obat.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Obat::with('supplier','satuan','jenis')->find($id);
        $supplai = Supplier::all();
        $satuan = satuan::all();
        $jenis = Jenis::all();
        return view('obat.edit',compact('model','supplai','satuan','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ObatRequest $request, $id)
    {
        $model = Obat::find($id);
        $model->Kode_Obat = $request->Kode_Obat;
        $model->id_supplai = $request->id_supplai;
        $model->Nama_Obat = $request->Nama_obat;
        $model->id_satuan = $request->id_satuan;
        $model->id_jenis = $request->id_jenis;
        $model->Stok = $request->Stok;
        $model->Harga = $request->Harga;
        $model->save();

        return redirect('Obat')->with('success','Data Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Obat::find($id);
        $model->delete();

        return redirect('Obat')->with('success','Data Berhasil Di Hapus');

    }
}
