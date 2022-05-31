@extends('layout.main')
@section('content')
    @if(Session::has('success'))
        <p class ="alert alert-success">{{ Session::get('success')}}</p>
    @endif
    <br></br>

    <h2 style= "text-align:Center">Data Obat</h2>

    <table class="table-bordered table">
    <div class="container">
        <form method="GET" action="{{url('Obat')}}" >
            <input type="text"name ="keyword" value="{{ $keyword }}"/>
            <button class ="btn btn-secondary"type ="submit">Search</button>
        </form>
    <div class="row">

        <div class="col-md-12 bg-light text-right">
            <a class="btn btn-primary"  href="{{url('Obat\create')}}">
            <i class="fa fa-plus">
               Tambah
            </i>    
            </a>
        </div>
    </div>
</div>

    
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
                @if(isset($value->jumlah->jumlah))
                    <td>{{($value->Stok) - ($value->jumlah->jumlah)}}</td>
                @endif
                @if(!isset($value->jumlah->jumlah))
                    <td>{{($value->Stok)}}</td>
                @endif
                <td>Rp.{{$value->Harga}}</td>
                <td><a class="btn btn-warning" href="{{ url('Obat/'.$value->id)}}">Detail</a></td>
                <td><a class="btn btn-info" href="{{ url('Obat/'.$value->id.'/edit')}}">Edit</a></td>
                <td>    
                
                    <form action="{{url('Obat/'.$value->id) }}" method="POST" onsubmit="return confirm('Lanjut Hapus Data ?')">
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
    {{$data_obat->links('pagination::bootstrap-4')}}
@endsection