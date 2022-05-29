<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Nota</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="No_Nota" value="{{$model->Kode_Obat}}">
      @foreach($errors->get('No_Nota') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach    
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Obat</label>
    <div class="col-sm-10">
    <select name="id_harga" class="form-control form-control-sm" id="colFormLabelSm">
        <option value="">--Pilih Obat--</option>
        @foreach($obat as $value)
            <option value="{{$value->id}}">{{$value->Kode_Obat}} | {{$value->Nama_obat}}</option>
        @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" min="1" max ="100"class="form-control form-control-sm" id="colFormLabelSm" name="jumlah" value="{{$model->jumlah}}">
      @foreach($errors->get('jumlah') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal</label>
    <div class="col-sm-10">
      <input type="date" class="form-control form-control-sm" id="colFormLabelSm" name="tanggal" value="{{$model->Harga}}">
      @foreach($errors->get('tanggal') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
  <a class="btn btn-info"  href="{{url('Jual')}}">Kembali</a> <br></br>
  