@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Jenis/'.$model->id) }}">
    @csrf
    @method('PUT')
    @include('jenis.form')
</form>
@endsection