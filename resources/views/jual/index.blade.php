@extends('layout.main')
@section('content')
    <h2 style= "text-align:Center">Penjualan</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>No Nota</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Tanggal</th></th>
                <th>Total Harga</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($dataJual as $key=>$value)
            <tr>
                <td>{{$value->No_Nota}}</td>
                <td>{{$value->obat->Nama_obat}}</td>
                <td>{{$value->jumlah}}</td>
                <td>{{$value->tanggal}}</td>
                <td>{{$value->obat->Harga * $value->jumlah}}</td>
                <td><a class="btn btn-warning" href="{{ url('Jual/'.$value->id)}}">Detail</a></td>
                <td>    
                    <form action="{{url('Jual/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <a class="btn btn-info"  href="{{url('Jual/create')}}">Tambah</a> <br></br>
        </tbody>
    </table>
@endsection