<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class jualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJual = Penjualan::all();
        $obat = Penjualan::with('obat')->get();
        return view('jual.index',compact('dataJual','obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Penjualan;
        $obat = Obat::all();
        return view('jual.create',compact('model','obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Penjualan;
        $model->No_Nota = $request->No_Nota;
        $model->id_harga = $request->id_harga;
        $model->jumlah = $request->jumlah;
        $model->tanggal = $request->tanggal;
        $model-> total =  $request->jumlah;
        $model->save();

        return redirect('Jual');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $model = Penjualan::find($id);
        $obat = Obat::all();
        return view('jual.edit',compact('model','obat'));
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
        $model = Penjualan::find($id);
        $model-> No_Nota = $request->nota;
        $model-> jumlah = $request->jumlah;
        $model-> tanggal = $request->tanggal;
        $model->save();

        return redirect('Jual');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Penjualan::find($id);
        $model->delete();

        return redirect('Jual');
    }
}
