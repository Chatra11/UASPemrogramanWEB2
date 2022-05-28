@extends('layout.main')

@section('content')

<form method="POST" action="{{url('Jual')}}">
    @csrf
    @include('jual.form')
</form>
@endsection