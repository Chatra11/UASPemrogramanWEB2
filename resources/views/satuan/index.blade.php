@extends('layout.main')
@section('content')
    @if(Session::has('success'))
        <p class ="alert alert-success">{{ Session::get('success')}}</p>
    @endif
    <a class="btn btn-info"  href="{{url('Satuan\create')}}">Tambah</a> <br></br>
    </br>
    <form method="GET" action="{{url('Satuan')}}" >
        <input type="text"name ="keyword" value="{{ $keyword }}"/>
        <button type ="submit">Search</button>
    </form>
    </br>
    <h2 style= "text-align:Center">Obat</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datasatuan as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->Nama_satuan}}</td>
                <td><a class="btn btn-info" href="{{ url('Satuan/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                    <form action="{{url('Satuan/'.$value->id) }}" method="POST" onsubmit="return confirm('Lanjut Hapus Data ?')">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$datasatuan->links('pagination::bootstrap-4')}}
@endsection