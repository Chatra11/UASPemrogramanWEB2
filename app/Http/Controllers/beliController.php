<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\pembelian;
use App\Models\Supplier;
use Illuminate\Http\Request;

class beliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databeli = pembelian::all();
        $obat = pembelian::with('obat','supplai')->get();
        return view('beli.index',compact('databeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new pembelian;
        $obat = Obat::all();
        $supplier = Supplier::all();
        return view('beli.create',compact('model','obat','supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new pembelian;
        $model->Nota_beli = $request->Nota_beli;
        $model->id_nama = $request->id_nama;
        $model->id_supplai = $request->id_supplai;
        $model->jmlh_beli = $request->jmlh_beli;
        $model->harga_beli = $request->harga_beli;
        $model->total_beli = $request->harga_beli * $request->jmlh_beli ;
        $model->save();

        return redirect('Beli');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = pembelian::find($id);
        return view('beli.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = pembelian::find($id);
        $model->delete();

        return redirect('Beli');
    }
}
