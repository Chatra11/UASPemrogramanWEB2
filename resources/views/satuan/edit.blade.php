@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Satuan/'.$model->id) }}">
    @csrf
    @method('PUT')
    @include('satuan.form')
</form>
@endsection