@extends('layout.main')

@section('content')

<form method="POST" action="{{url('Beli')}}">
    @csrf
    @include('beli.form')
</form>
@endsection