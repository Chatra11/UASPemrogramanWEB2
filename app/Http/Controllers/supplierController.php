<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier as ModelsSupplier;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_supplai = ModelsSupplier::all();
        return view('supplier.index',compact('data_supplai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new ModelsSupplier;
        return view('supplier.form',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new ModelsSupplier;
        $model->Nama_Supplier = $request->nama_supplai;
        $model->Alamat = $request->alamat_supplai;
        $model->Telepon = $request->telepon_supplai;
        $model->save();

        return redirect('Supplier');
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
        $model = ModelsSupplier::find($id);
        return view('supplier.edit',compact('model'));
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
        $model = ModelsSupplier::find($id);
        $model->Nama_Supplier = $request->nama_supplai;
        $model->Alamat = $request->alamat_supplai;
        $model->Telepon = $request->telepon_supplai;
        $model->save();

        return redirect('Supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ModelsSupplier::find($id);
        $model->delete();

        return redirect('Supplier');
    }
}
