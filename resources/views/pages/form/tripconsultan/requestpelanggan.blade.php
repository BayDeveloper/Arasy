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
                <hr class="my-1">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="ID" class="col-sm-2 col-form-label">Identitas Pelanggan</label>
        <div class="col-sm-10">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="NIP/NIK">
              </div>
            </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="Contact" class="col-sm-2 col-form-label">Kontak Pelanggan</label>
        <div class="col-sm-10">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nomor Kontak">
              </div>
            </div>
        </div>
      </div>
      <!-- /.form-group -->
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
            <div class="col">
              <input type="text" class="form-control" placeholder="Daerah/Lokasi">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="takeway" class="col-sm-2 col-form-label">Keberangkatan</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Jam Berangkat">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Durasi" class="col-sm-2 col-form-label">Durasi Trip</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Jumlah Hari">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Jenis" class="col-sm-2 col-form-label">Jenis Wisata</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Tujuan Wisata">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Akomodasi" class="col-sm-2 col-form-label">Akomodasi</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <select class="select2-akomodasi js-states form-control" multiple="multiple" style="width: 100%;">
                <option>Hotel</option>
                <option>Resort</option>
                <option>Cottage</option>
                <option>Other</option>
              </select>
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Transportasi" class="col-sm-2 col-form-label">Transportasi</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <select class="select2-transportasi js-states form-control" multiple="multiple" style="width: 100%;">
                <option>Bus</option>
                <option>Mini Bus</option>
                <option>Private Car</option>
                <option>Other</option>
              </select>
            </div>
          </div>
      </div>
    </div>


    <div class="form-group row">
      <label for="TripTools" class="col-sm-2 col-form-label">Trip Tools</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <select class="select2-triptools js-states form-control" multiple="multiple" style="width: 100%;">
                <option>LogBook</option>
                <option>Uniform</option>
                <option>Other</option>
              </select>
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Dokumentasi" class="col-sm-2 col-form-label">Dokumentasi</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <select class="select2-dokumentasi js-states form-control" multiple="multiple" style="width: 100%;">
                <option>After Movie</option>
                <option>Dvd Album</option>
                <option>Other</option>
              </select>
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
            <div class="col">
              <input type="text" class="form-control">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ID" class="col-sm-2 col-form-label">Target</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control">
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ID" class="col-sm-2 col-form-label">Position</label>
      <div class="col-sm-10">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control">
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</form>

Address:<br>
<textarea id="myTextarea">
342 Alvin Road
Ducksburg</textarea>

<p>Click the button to get the content of the text area.</p>

<button type="button" onclick="myFunction()">Try it</button>
<p id="demo"></p>

<div class="row">
  <div class="col">
    <input type="text" id="other-akomodasi" class="form-control" placeholder="other">
  </div>
</div>

@endsection
