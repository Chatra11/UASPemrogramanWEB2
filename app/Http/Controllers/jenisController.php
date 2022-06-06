<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisRequest;
use App\Models\Jenis;
use Illuminate\Http\Request;

class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datajenis = Jenis::where('Nama_Jenis',"LIKE",'%'.$keyword.'%')
        ->paginate(4);
        $datajenis->withPath('Jenis');
        $datajenis->append($request->all());
        return view('jenis.index',compact('datajenis','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Jenis;
        return view('jenis.create',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenisRequest $request)
    {
        $model = new Jenis;
        $model->Nama_Jenis = $request->Nama_Jenis;
        $model->save();

        return redirect('Jenis')->with('success','Data Berhasil Di Simpan');
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
        $model = Jenis::find($id);
        return view('jenis.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JenisRequest $request, $id)
    {
        $model = Jenis::find($id);
        $model->Nama_Jenis = $request->Nama_Jenis;
        $model->save();

        return redirect('Jenis')->with('success','Data Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Jenis::find($id);
        $model->delete();

        return redirect('Jenis')->with('success','Data Berhasil Di Hapus');
    }
}
