@extends('layout.main')
@section('content')
    <h2 style= "text-align:Center">Detail Penjualan</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>No Nota</th>
                <td>{{$model->No_Nota}}</td>
            </tr>
            <tr>
                <th>Nama Obat</th>
                <td>{{$model->obat->Nama_obat}}</td>
            </tr>
            <tr>
                <th>Jenis Obat</th>
                <td>{{$model->jenis->Nama_Jenis}}</td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>{{$model->jumlah}}</td>
            </tr>
            <tr>
                <th>Total Harga</th> 
                <td>{{$model->obat->Harga * $model->jumlah}}</td>
            </tr>
            <tr>
                <th>Tanggal</th></th>
                <td>{{$model->tanggal}}</td>
            </tr>
        </thead>     
            <th>
                <a class="btn btn-info"  href="{{url('Jual')}}">Kembali</a> <br></br>
            </th>
    </table>
@endsection