@extends('layout.main')
@section('obat')
    <h2 style= "text-align:Center">Obat</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Kode Obat</th>
                <th>Id Supplier</th>
                <th>Nama Obat</th>
                <th>Stok</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_obat as $key=>$value)
            <tr>
                <td>{{$value->Kode_Obat}}</td>
                <td>{{$value->Supplier_id}}</td>
                <td>{{$value->Nama_obat}}</td>
                <td>{{$value->Stok}}</td>
                <td>{{$value->Foto}}</td>
                <td>{{$value->Harga}}</td>
                <td><a class="btn btn-info" href="{{ url('Obat/'.$value->id.'/edit')}}">Edit</a>
                    <a class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
            <a class="btn btn-info"  href="{{url('Obat\create')}}">Tambah</a> <br></br>
        </tbody>
    </table>
@endsection