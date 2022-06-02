@extends('layout.main')
@section('content')
    <h2 style= "text-align:Center">Welcome to Sistem Informasi Apotek, {{auth()->user()->name}}</h2>
    <div class="row">
        <div class="col-md-3">
                <div class="card card-primary collapsed-card">
                    <div class="bg-info text-white">
                        <div class="card-header">
                            <h3 class="card-title">Data Obat</h3>
                    </div>
                </div>
                    
                <!-- /.card-header -->
                <div class="card-body">
                    {{ $jumlahobat }} Obat
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>

        <div class="col-md-3">
                <div class="card card-primary collapsed-card">
                    <div class="bg-success text-white">
                        <div class="card-header">
                            <h3 class="card-title">Data Supplier</h3>
                        </div>
                    </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{ $jumlahsupplier }} Penyuplai
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
    </div>
@endsection