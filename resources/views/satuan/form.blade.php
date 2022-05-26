<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Satuan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nama_satuan" value="{{$model->Nama_satuan}}">
        @foreach($errors->get('Nama_satuan') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach    
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>