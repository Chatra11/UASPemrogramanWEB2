@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Supplier/'.$model->id) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nama Supplier</td>
            <td><input type="text" name="nama_supplai" value="{{$model->Nama_Supplier}}"> <br></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat_supplai" value="{{$model->Alamat}}"required> <br></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="telepon_supplai" value="{{$model->Telepon}}"required> <br></td>
            </tr>
        <tr>
            <td>
                <button type="submit">Update</button> 
            </td>
        </tr>
        </table>
</form>
@endsection