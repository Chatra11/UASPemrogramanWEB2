@extends('layout.main')
@section('content')
    <h2 style= "text-align:Center">Detail Pembelian</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Nota</th>
                <td>{{$model->Nota_beli}}</td>
            </tr>
            <tr>
                <th>Nama Obat</th>
                <td>{{$model->obat->Nama_obat}}</td>
            </tr>
            <tr>
                <th>Supplier</th>
                <td>{{$model->supplai->Nama_Supplier}}</td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>{{$model->jmlh_beli}}</td>
            </tr>
            <tr>
                <th>Total Harga</th> 
                <td>{{$model->harga_beli * $model->jmlh_beli}}</td>
            </tr>
            <tr>
                <th>Tanggal</th></th>
                <td>{{$model->created_at}}</td>
            </tr>
        </thead>     
            <th>
                <a class="btn btn-info"  href="{{url('Beli')}}">Kembali</a> <br></br>
            </th>
    </table>
@endsection