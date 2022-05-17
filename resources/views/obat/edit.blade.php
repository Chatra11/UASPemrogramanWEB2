@extends('layout.main')

@section('obat')
<form method="POST" action="{{url('Obat/'.$model->id_obat) }}">
    @csrf
    @method('PATCH')
    <!-- <input type="hidden"name="_method"values="PATCH"> -->
    <table>
        <tr>
            <td>Kode Obat</td>
            <td><input type="text" name="kode" value="{{$model->Kode_Obat}}"> <br></td>
        </tr>
        <tr>
            <td>Nama Obat</td>
            <td><input type="text" name="nama" value="{{$model->Nama_Obat}}"required> <br></td>
            </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok" min ="0" max="1000" value="{{$model->Stok}}"required> <br></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" required value = "{{$model->Harga}}"> <br></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Update</button> 
            </td>
        </tr>
        </table>
</form>
@endsection