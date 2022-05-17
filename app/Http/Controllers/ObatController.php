<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

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
        $model->Nama_Obat = $request->nama;
        $model->Stok = $request->stok;
        $model->Harga = $request->harga;
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
    public function edit($id_obat)
    {
        $model = Obat::find($id_obat);
        return view('obat.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_obat)
    {
        $model = Obat::find($id_obat);
        $model->Kode_Obat = $request->kode;
        $model->Nama_Obat = $request->nama;
        $model->Stok = $request->stok;
        $model->Harga = $request->harga;
        $model->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_obat)
    {
        //
    }
}
