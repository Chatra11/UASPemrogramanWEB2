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
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_obat as $key=>$value)
            <tr>
                <td>{{$value->Kode_Obat}}</td>
                <td>{{$value->Supplier_id}}</td>
                <td>{{$value->Nama_obat}}</td>
                <td>{{$value->Stok}}</td>
                <td>
                    @if(strlen($value->Foto)>0)
                        <img src="{{ asset('Foto/'.$value->Foto) }}" />
                    @endif
                </td>
                <td>{{$value->Harga}}</td>
                <td><a class="btn btn-info" href="{{ url('Obat/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                
                    <form action="{{url('Obat/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <a class="btn btn-info"  href="{{url('Obat\create')}}">Tambah</a> <br></br>
        </tbody>
    </table>
@endsection