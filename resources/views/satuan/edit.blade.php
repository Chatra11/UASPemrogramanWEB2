@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Satuan/'.$model->id) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nama Satuan</td>
            <td><input type="text" name="nama" value="{{$model->Nama_satuan}}"> <br></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Update</button> 
            </td>
        </tr>
        </table>
</form>
@endsection