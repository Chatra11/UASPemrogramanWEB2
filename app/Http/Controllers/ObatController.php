<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObatRequest;
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
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $data_obat = Obat::all();
        $data_obat = Obat::where('Kode_Obat',"LIKE",'%'.$keyword.'%')
            ->orWhere('Nama_obat',"LIKE",'%'.$keyword.'%')
            ->paginate(2);
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
        return view('obat.create',compact('model'));
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
        $model->Kode_Obat = $request->Kode_Obat;
        $model->Supplier_id = $request->Supplier_id;
        $model->Nama_obat = $request->Nama_obat;
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
    public function update(ObatRequest $request, $id)
    {
        $model = Obat::find($id);
        $model->Kode_Obat = $request->Kode_Obat;
        $model->Supplier_id = $request->Supplier_id;
        $model->Nama_Obat = $request->Nama_obat;
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

        return redirect('Obat');

    }
}
