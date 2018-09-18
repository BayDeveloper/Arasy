@extends('main')

@section('content')
<form>
  <div class="card-group">
    <div class="card">
      <div class="card-header bg-success text-white"><h3>Formulir Request Pelanggan</h3></div>

    </div>
  </div>
  <hr>

  <div class="card text-white bg-primary mb-3">
  <div class="card-header"><h5><span><b>A. Identitas Pelanggan<b><span><h5></div>
  <div class="card-body">
      <div class="form-group row">
        <label for="FullName" class="col-sm-2 col-form-label">Nama Pelanggan</label>
        <div class="col-sm-10">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="ID" class="col-sm-2 col-form-label">Identitas Pelanggan</label>
        <div class="col-sm-10">
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="NIP/NIK">
              </div>
            </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="Contact" class="col-sm-2 col-form-label">Kontak Pelanggan</label>
        <div class="col-sm-10">
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="Nomor Kontak">
              </div>
            </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">Tipe Produk</div>
        <div class="col-sm-10">
          <div class="form-check">
            <div class="row">
              <div class="col-2">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                  New
                </label>
              </div>
              <div class="col-2">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                  Revisi
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
<div class="card text-white bg-danger mb-3">
  <div class="card-header"><h5><span><b>B. Permintaan Pelanggan<b><span><h5></div>
  <div class="card-body">
    <div class="form-group row">
      <label for="Destinasi" class="col-sm-2 col-form-label">Destinasi/Tujuan</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Daerah/Lokasi">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="takeway" class="col-sm-2 col-form-label">Keberangkatan</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Jam Berangkat">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Durasi" class="col-sm-2 col-form-label">Durasi Trip</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Jumlah Hari">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Jenis" class="col-sm-2 col-form-label">Jenis Wisata</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Tujuan Wisata">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2">Akomodasi</div>
      <div class="col-sm-10">
        <div class="form-check">
          <div class="row">
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Hotel
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Resort
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Cottage
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                ...
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2">Transportasi</div>
      <div class="col-sm-10">
        <div class="form-check">
          <div class="row">
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Bus
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Mini Bus
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Private Car
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                ...
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2">Trip Tools</div>
      <div class="col-sm-10">
        <div class="form-check">
          <div class="row">
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                LogBook
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Uniform
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                ...
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2">Dokumentasi</div>
      <div class="col-sm-10">
        <div class="form-check">
          <div class="row">
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                After Movie
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Dvd Album
              </label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                ...
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card text-gray bg-light mb-3">
  <div class="card-header"><h5><span><b>C. Note<b><span><h5></div>
  <div class="card-body">
    <div class="form-group">
       <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  </div>
</div>
<hr class="my-4">
<h4>Internal Use</h4>
<div class="card text-white bg-secondary mb-3">
  <div class="card-header"><h5><span><b>D. Jenis Pelanggan<b><span><h5></div>
  <div class="card-body">
    <div class="form-group row">
      <label for="ID" class="col-sm-2 col-form-label">Segment</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ID" class="col-sm-2 col-form-label">Target</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ID" class="col-sm-2 col-form-label">Position</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control">
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</form>
@endsection
