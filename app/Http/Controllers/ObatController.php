<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use Illuminate\Support\Facades\File;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_obat = Obat::all();
        return view('obat.index',compact('data_obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Obat;
        return view('obat.form',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Obat;
        $model->Kode_Obat = $request->kode;
        $model->Supplier_id = $request->suplier;
        $model->Nama_obat = $request->nama;
        $model->Stok = $request->stok;        
        $model->Harga = $request->harga;
        if($request->file('Foto')){
            $file = $request->file('Foto');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $image = $file->storeAs('foto', $nama_file);
            $model->Foto = $nama_file;
        }
        $model->save();

        return redirect('Obat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Obat::find($id);
        return view('obat.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Obat::find($id);
        $model->Kode_Obat = $request->kode;
        $model->Supplier_id = $request->suplier;
        $model->Nama_Obat = $request->nama;
        $model->Stok = $request->stok;

        if($request->file('Foto')){
            $file = $request->file('Foto');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->storeAs('foto', $nama_file);
            $model->Foto = $nama_file;

            File::delete('foto/'.$model->Foto);
            $model->Foto = $nama_file;
        }

        $model->Harga = $request->harga;
        $model->save();

        return redirect('Obat');
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

        return redirect('Obat');

    }
}
