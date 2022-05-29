<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jenis Obat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nama_Jenis" value="{{$model->Nama_Jenis}}">
        @foreach($errors->get('Nama_Jenis') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach    
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
  <a class="btn btn-info"  href="{{url('Satuan')}}">Kembali</a> <br></br>