@extends('layout.main')
@section('supplai')
<h2 style= "text-align:Center">Supplai</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Id Supplier</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_supplai as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->Nama_Supplier}}</td>
                <td>{{$value->Alamat}}</td>
                <td>{{$value->Telepon}}</td>
                <td><a class="btn btn-info" href="{{ url('Supplier/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                
                    <form action="{{url('Supplier/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <a class="btn btn-info"  href="{{url('Supplier\create')}}">Tambah</a> <br></br>
        </tbody>
    </table>
@endsection