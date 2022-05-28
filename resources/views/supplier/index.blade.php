@extends('layout.main')
@section('content')
@if(Session::has('success'))
    <p class ="alert alert-success">{{ Session::get('success')}}</p>
@endif
<a class="btn btn-info"  href="{{url('Supplier\create')}}">Tambah</a> <br></br>
</br>
    <form method="GET" action="{{url('Supplier')}}" >
        <input type="text"name ="keyword" value="{{ $keyword }}"/>
        <button type ="submit">Search</button>
    </form>
</br>
<h2 style= "text-align:Center">Supplai</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_supplai as $key=>$value)
            <tr>
                <td>{{$value->Nama_Supplier}}</td>
                <td>{{$value->Alamat}}</td>
                <td>{{$value->Telepon}}</td>
                <td><a class="btn btn-info" href="{{ url('Supplier/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                
                    <form action="{{url('Supplier/'.$value->id) }}" method="POST" onsubmit="return confirm('Lanjut Hapus Data ?')">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$data_supplai->links('pagination::bootstrap-4')}}
@endsection