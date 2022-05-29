@extends('layout.main')
@section('content')
    @if(Session::has('success'))
        <p class ="alert alert-success">{{ Session::get('success')}}</p>
    @endif
    <a class="btn btn-info"  href="{{url('Jenis\create')}}">Tambah</a> <br></br>
    </br>
    <form method="GET" action="{{url('Jenis')}}" >
        <input type="text"name ="keyword" value="{{ $keyword }}"/>
        <button type ="submit">Search</button>
    </form>
    </br>
    <h2 style= "text-align:Center">Jenis</h2>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datajenis as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->Nama_Jenis}}</td>
                <td><a class="btn btn-info" href="{{ url('Jenis/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                    <form action="{{url('Jenis/'.$value->id) }}" method="POST" onsubmit="return confirm('Lanjut Hapus Data ?')">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$datajenis->links('pagination::bootstrap-4')}}
@endsection