@extends('main')

@section('content')

  <div class="card-group">
    <div class="card">
      <div class="card-header bg-success text-white"><h3>Formulir Request Pelanggan</h3></div>

    </div>
  </div>
  <hr>

  <div class="card text-white bg-primary mb-3">
  <div class="card-header"><h5><span><b>A. Identitas Pelanggan<b><span><h5></div>
  <div class="card-body">
    <form>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="card text-white bg-danger mb-3">
  <div class="card-header"><h5><span><b>B. Permintaan Pelanggan<b><span><h5></div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-gray bg-light mb-3">
  <div class="card-header"><h5><span><b>C. Note Pelanggan<b><span><h5></div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3">
  <div class="card-header"><h5><span><b>D. Jenis Pelanggan<b><span><h5></div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

@endsection
