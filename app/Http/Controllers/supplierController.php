<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use Illuminate\Http\Request;
use App\Models\Supplier as ModelsSupplier;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $data_supplai = ModelsSupplier::where('Nama_Supplier',"LIKE",'%'.$keyword.'%')
            ->orWhere('Telepon',"LIKE",'%'.$keyword.'%')
            ->orWhere('Alamat',"LIKE",'%'.$keyword.'%')
            ->paginate(1);
        $data_supplai->withPath('Supplier');
        $data_supplai->append($request->all());
        return view('supplier.index',compact('data_supplai','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new ModelsSupplier;
        return view('supplier.create',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        $model = new ModelsSupplier;
        $model->Nama_Supplier = $request->Nama_Supplier;
        $model->Alamat = $request->Alamat;
        $model->Telepon = $request->Telepon;
        $model->save();

        return redirect('Supplier')->with('success','Data Berhasil Di Simpan');
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
    public function update(SupplierRequest $request, $id)
    {
        $model = ModelsSupplier::find($id);
        $model->Nama_Supplier = $request->nama_supplai;
        $model->Alamat = $request->alamat_supplai;
        $model->Telepon = $request->telepon_supplai;
        $model->save();

        return redirect('Supplier')->with('success','Data Berhasil Di Perbaharui');
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
