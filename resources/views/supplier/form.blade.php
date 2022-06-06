<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Suplai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nama_Supplier" value="{{$model->Nama_Supplier}}"placeholder="Nama Supplier">
      @foreach($errors->get('Nama_Supplier') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Alamat" value="{{$model->Alamat}}"placeholder="Alamat Supplier">
      @foreach($errors->get('Alamat') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Telepon" value="{{$model->Telepon}}"placeholder="Nomor Telepon Supplier">
      @foreach($errors->get('Telepon') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
  <a class="btn btn-info"  href="{{url('Supplier')}}">Kembali</a> <br></br>