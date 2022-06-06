@extends('layout.main')
@section('content')
@if(Session::has('success'))
    <p class ="alert alert-success">{{ Session::get('success')}}</p>
@endif
</br>
    <h2 style= "text-align:Center">Pembelian</h2>
    <table class="table-bordered table">
    <div class="container">
    <div class="row">
        <div class="col-md-12 bg-light text-right">
            <a class="btn btn-primary"  href="{{url('Beli\create')}}">            
            <i class="fa fa-plus">
               Tambah
            </i>    
            </a>
        </div>
    </div>
</div>
        <thead>
            <tr>
                <th>Nota</th>
                <th>Nama Obat</th>
                <th>Supplier</th>
                <th>Jumlah</th>
                <th>Harga Beli</th>
                <th>Total Harga</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($databeli as $key=>$value)
            <tr>
                <td>{{$value->Nota_beli}}</td>
                <td>{{$value->obat->Nama_obat}}</td>
                <td>{{$value->supplai->Nama_Supplier}}</td>
                <td>{{$value->jmlh_beli}}</td>
                <td>Rp. {{$value->harga_beli}}</td>
                <td>Rp. {{$value->harga_beli * $value->jmlh_beli}}</td>
                <td><a class="btn btn-warning" href="{{ url('Beli/'.$value->id)}}">Detail</a></td>
                <td>    
                    <form action="{{url('Beli/'.$value->id) }}" method="POST" method="POST" onsubmit="return confirm('Lanjut Hapus Data ?')">
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
    {{$databeli->links('pagination::bootstrap-4')}}
@endsection