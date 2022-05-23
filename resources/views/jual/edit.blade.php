@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Jual/'.$model->id) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>No Nota</td>
            <td><input type="text" name = "nota" value="{{$model->No_Nota}}"> <br></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah" value="{{$model->jumlah}}"required> <br></td>
        </tr>
        <tr>
            <td>Nama Obat</td>
            <td><input type="tanggal" name="tanggal" value="{{$model->tanggal}}"required> <br></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Update</button> 
            </td>
        </tr>
        </table>
</form>
@endsection