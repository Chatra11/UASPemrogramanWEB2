@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Jenis')}}"enctype="multipart/form-data">
    @csrf
    @include('jenis.form')
</form>
@endsection