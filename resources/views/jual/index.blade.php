@extends('layout.main')
@section('content')
@if(Session::has('success'))
    <p class ="alert alert-success">{{ Session::get('success')}}</p>
@endif
</br>
    <h2 style= "text-align:Center">Penjualan</h2>
    <table class="table-bordered table">
    <div class="container">
    <div class="row">
        <div class="col-md-12 bg-light text-right">
            <a class="btn btn-primary"  href="{{url('Jual\create')}}">            
            <i class="fa fa-plus">
               Tambah
            </i>    
            </a>
        </div>
    </div>
</div>
        <thead>
            <tr>
                <th>No Nota</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Tanggal</th></th>
                <th>Total Harga</th>
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
                <td>Rp. {{$value->obat->Harga * $value->jumlah}}</td>
                <td><a class="btn btn-warning" href="{{ url('Jual/'.$value->id)}}">Detail</a></td>
                <td>    
                    <form action="{{url('Jual/'.$value->id) }}" method="POST" method="POST" onsubmit="return confirm('Lanjut Hapus Data ?')">
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
    {{$dataJual->links('pagination::bootstrap-4')}}
@endsection