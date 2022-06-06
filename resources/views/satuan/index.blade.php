@extends('layout.main')
@section('content')
    @if(Session::has('success'))
        <p class ="alert alert-success">{{ Session::get('success')}}</p>
    @endif
    <br></br>

    <h2 style= "text-align:Center">Satuan Obat</h2>

    <table class="table-bordered table">
    <div class="container">
        <form method="GET" action="{{url('Satuan')}}" >
            <input type="text"name ="keyword" value="{{ $keyword }}"placeholder="Masukan Keyword"/>
            <button class ="btn btn-secondary"type ="submit">Search</button>
        </form>
    <div class="row">

        <div class="col-md-12 bg-light text-right">
            <a class="btn btn-primary"  href="{{url('Satuan\create')}}">            
            <i class="fa fa-plus">
               Tambah
            </i>    
            </a>
        </div>
    </div>
</div>
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
                    <button class="btn btn-danger" type= "submit">                    
                    <i class="fa fa-trash">
                        Delete
                    </i>    
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$datasatuan->links('pagination::bootstrap-4')}}
@endsection