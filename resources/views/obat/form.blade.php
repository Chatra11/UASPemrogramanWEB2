@extends('layout.main')

@section('obat')
<form method="POST" action="{{url('Obat')}}"enctype="multipart/form-data">
    @csrf
    <table>
            <tr>
                <td>Kode Obat</td>
                <td><input type="text" name="kode"> <br></td>
            </tr>
            <tr>
                <td>Id Supplier</td>
                <td><input type="text" name="suplier" required> <br></td>
            </tr>
            <tr>
                <td>Nama Obat</td>
                <td><input type="text" name="nama" required> <br></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" min ="0" max="1000"required> <br></td>
            </tr>
            <tr>
                <td>Foto Obat</td>
                <td><input type="file" name="Foto" required> <br></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" required> <br></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Tambah</button> 
                </td>
            </tr>
        </table>
</form>
@endsection