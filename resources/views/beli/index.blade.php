@extends('layout.main')
@section('content')
    <h2 style= "text-align:Center">Pembelian</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Nota</th>
                <th>Nama Obat</th>
                <th>Supplier</th>
                <th>Jumlah</th>
                <th>Harga Beli</th>
                <th>Total Harga</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($databeli as $key=>$value)
            <tr>
                <td>{{$value->Nota_beli}}</td>
                <td>{{$value->obat->Nama_obat}}</td>
                <td>{{$value->supplai->Nama_Supplier}}</td>
                <td>{{$value->jmlh_beli}}</td>
                <td>Rp. {{$value->harga_beli}}</td>
                <td>Rp. {{$value->harga_beli * $value->jmlh_beli}}</td>
                <td><a class="btn btn-warning" href="{{ url('Beli/'.$value->id)}}">Detail</a></td>
                <td>    
                    <form action="{{url('Beli/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <a class="btn btn-info"  href="{{url('Beli/create')}}">Tambah</a> <br></br>
        </tbody>
    </table>
@endsection