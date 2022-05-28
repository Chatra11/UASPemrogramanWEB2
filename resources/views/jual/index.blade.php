@extends('layout.main')
@section('content')
    <h2 style= "text-align:Center">Obat</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>No Nota</th>
                <th>Jumlah</th>
                <th>Tanggal</th></th>
                <th>Total</th>
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
                <td>{{($value->getTotalHarga())}}</td>
                <td><a class="btn btn-info" href="{{ url('Satuan/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                    <form action="{{url('Satuan/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <a class="btn btn-info"  href="{{url('Jual\create')}}">Tambah</a> <br></br>
        </tbody>
    </table>
@endsection