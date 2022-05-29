@extends('layout.main')
@section('content')
    <h2 style= "text-align:Center">Detail Obat</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Kode Obat</th>
                <td>{{$model->Kode_Obat}}</td>
            </tr>
            <tr>
                <th>Nama Obat</th>
                <td>{{$model->Nama_obat}}</td>
            </tr>
            <tr>
                <th>Jenis Obat</th>
                <td>{{$model->jenis->Nama_Jenis}}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{$model->satuan->Nama_satuan}}</td>
            </tr>
            <tr>
                <th>Stok</th> 
                <td>{{$model->Stok}}</td>
            </tr>
            <tr>
                <th>Harga</th> 
                <td>{{$model->Harga}}</td>
            </tr>
        </thead>     
            <th>
                <a class="btn btn-info"  href="{{url('Jual')}}">Kembali</a> <br></br>
            </th>
    </table>
@endsection