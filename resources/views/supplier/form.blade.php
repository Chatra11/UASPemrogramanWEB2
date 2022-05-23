@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Supplier')}}"enctype="multipart/form-data">
    @csrf
    <table>
            <tr>
                <td>Nama Supplier</td>
                <td><input type="text" name="nama_supplai" required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_supplai" required> <br></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon_supplai" required> <br></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Tambah</button> 
                </td>
            </tr>
        </table>
</form>
@endsection