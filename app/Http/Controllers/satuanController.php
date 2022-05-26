<?php

namespace App\Http\Controllers;

use App\Http\Requests\satuanRequest;
use App\Models\satuan;
use Illuminate\Http\Request;

class satuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datasatuan = satuan::where('Nama_satuan',"LIKE",'%'.$keyword.'%')
        ->paginate(1);
        $datasatuan->withPath('Satuan');
        $datasatuan->append($request->all());
        return view('satuan.index',compact('datasatuan','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new satuan;
        return view('satuan.create',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(satuanRequest $request)
    {
        $model = new satuan;
        $model->Nama_satuan = $request->Nama_satuan;
        $model->save();

        return redirect('Satuan')->with('success','Data Berhasil Di Simpan');
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
        $model = satuan::find($id);
        return view('satuan.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(satuanRequest $request, $id)
    {
        $model = satuan::find($id);
        $model->Nama_satuan = $request->nama;
        $model->save();

        return redirect('Satuan')->with('success','Data Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = satuan::find($id);
        $model->delete();

        return redirect('Satuan');
    }
}
