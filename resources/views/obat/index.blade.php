@extends('layout.main')
@section('content')
    @if(Session::has('success'))
        <p class ="alert alert-success">{{ Session::get('success')}}</p>
    @endif
    <a class="btn btn-info"  href="{{url('Obat\create')}}">Tambah</a> <br></br>
    </br>
    <form method="GET" action="{{url('Obat')}}" >
        <input type="text"name ="keyword" value="{{ $keyword }}"/>
        <button type ="submit">Search</button>
    </form>
    </br>
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Supplier</th>
                <th>Satuan</th>
                <th>Jenis</th>
                <th>Stok</th>
                <th>Harga</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_obat as $key=>$value)
            <tr>
                <td>{{$value->Kode_Obat}}</td>
                <td>{{$value->Nama_obat}}</td>
                <td>{{$value->supplier->Nama_Supplier}}</td>
                <td>{{$value->satuan->Nama_satuan}}</td>
                <td>{{$value->jenis->Nama_Jenis}}</td>
                <td>{{$value->Stok}}</td>
                <td>{{$value->Harga}}</td>
                <td><a class="btn btn-warning" href="{{ url('Obat/'.$value->id)}}">Detail</a></td>
                <td><a class="btn btn-info" href="{{ url('Obat/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                
                    <form action="{{url('Obat/'.$value->id) }}" method="POST" onsubmit="return confirm('Lanjut Hapus Data ?')">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type= "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$data_obat->links('pagination::bootstrap-4')}}
@endsection