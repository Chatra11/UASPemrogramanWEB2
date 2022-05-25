@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Supplier')}}"enctype="multipart/form-data">
    @csrf
    @include('supplier.form')
</form>
@endsection