@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Jual')}}"enctype="multipart/form-data">
    @csrf
    <table>
            <tr>
                <td>No Nota</td>
                <td><input type="text" name="nota" required> <br></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlah" min ="0" max="1000" required> <br></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" required> <br></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Tambah</button> 
                </td>
            </tr>
        </table>
</form>
@endsection