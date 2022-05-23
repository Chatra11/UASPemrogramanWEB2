@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Obat/'.$model->id) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Kode Obat</td>
            <td><input type="text" name="kode" value="{{$model->Kode_Obat}}"> <br></td>
        </tr>
        <tr>
            <td>Id Supplier</td>
            <td><input type="text" name="suplier" value="{{$model->Supplier_id}}"required> <br></td>
        </tr>
        <tr>
            <td>Nama Obat</td>
            <td><input type="text" name="nama" value="{{$model->Nama_obat}}"required> <br></td>
            </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok" min ="0" max="1000" value="{{$model->Stok}}"required> <br></td>
        </tr>
        <tr>
            <td>Foto Obat</td>
            <td><input type="file" name="foto" value = "{{$model->Foto}}"required> <br></td>
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