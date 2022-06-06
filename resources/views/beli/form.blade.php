<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Nota</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nota_beli" value="{{$model->Nota_beli}}"placeholder="Masukan Nota Pembelian">
      @foreach($errors->get('Nota_beli') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach    
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Obat</label>
    <div class="col-sm-10">
    <select name="id_nama" class="form-control form-control-sm" id="colFormLabelSm">
        <option value="">--Pilih Obat--</option>
        @foreach($obat as $value)
            <option value="{{$value->id}}">{{$value->Kode_Obat}} | {{$value->Nama_obat}}</option>
        @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Supplier</label>
    <div class="col-sm-10">
    <select name="id_supplai" class="form-control form-control-sm" id="colFormLabelSm">
        <option value="">--Pilih supplier--</option>
        @foreach($supplier as $value)
            <option value="{{$value->id}}">{{$value->Nama_Supplier}}</option>
        @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" min="1" max ="100"class="form-control form-control-sm" id="colFormLabelSm" name="jmlh_beli" value="{{$model->jmlh_beli}}"placeholder="Masukan Jumlah Pembelian">
      @foreach($errors->get('jmlh_beli') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="harga_beli" value="{{$model->jmlh_beli}}"placeholder="Masukan Harga Pembelian">
      @foreach($errors->get('harga_beli') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
  <a class="btn btn-info"  href="{{url('Beli')}}">Kembali</a> <br></br>
  