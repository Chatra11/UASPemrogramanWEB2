@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Satuan')}}"enctype="multipart/form-data">
    @csrf
    @include('satuan.form')
</form>
@endsection