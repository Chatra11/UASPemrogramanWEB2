@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Satuan')}}"enctype="multipart/form-data">
    @csrf
    <table>
            <tr>
                <td>Nama Satuan</td>
                <td><input type="text" name="nama" required> <br></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Tambah</button> 
                </td>
            </tr>
        </table>
</form>
@endsection