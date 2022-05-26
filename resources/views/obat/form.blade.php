<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kode Obat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Kode_Obat" value="{{$model->Kode_Obat}}">
      @foreach($errors->get('Kode_Obat') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach    
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Obat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nama_obat" value="{{$model->Nama_obat}}">
      @foreach($errors->get('Nama_obat') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Supplier</label>
    <div class="col-sm-10">
    <select  class="form-control form-control-sm" name="id_supplai" id="id_supplai">
        <option value="">--Pilih Supplier--</option>
        @foreach($supplai as $value)
            <option value="{{$value->id}}">{{$value->Nama_Supplier}}</option>
        @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Satuan</label>
    <div class="col-sm-10">
    <select name="id_satuan" class="form-control form-control-sm" id="colFormLabelSm">
        <option value="">--Pilih Satuan--</option>
        @foreach($satuan as $value)
            <option value="{{$value->id}}">{{$value->Nama_satuan}}</option>
        @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Stok</label>
    <div class="col-sm-10">
      <input type="number" min="0" max ="1000"class="form-control form-control-sm" id="colFormLabelSm" name="Stok" value="{{$model->Stok}}">
      @foreach($errors->get('Stok') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Harga" value="{{$model->Harga}}">
      @foreach($errors->get('Harga') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>