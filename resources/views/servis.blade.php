@extends('index')
@section('title', 'dashboard')
@section('content-title')
@section('content')
<div class="card">
    <div class="card-header">
      <h6>this is our list's service</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">UI/UX</h5>
              <p class="card-text">Software yang kami gunakan adalah figma dan adobe photoshop. Toleransi revisi dari klien adalah 3x</p>
              <a href="#" class="btn btn-primary">Call us</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Front-end</h5>
              <p class="card-text">Teknologi yang kami gunakan adalah HTML, CSS, Javascript dan framework seperti bootstrap, tailwind, react dan vue.</p>
              <a href="#" class="btn btn-primary">Call us</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Back-end</h5>
              <p class="card-text">Teknologi yang kami gunakan adalah NodeJS, PHP</p>
              <a href="#" class="btn btn-primary">Call us</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Database</h5>
              <p class="card-text">Teknologi yang kita gunakan adalah mysql</p>
              <a href="#" class="btn btn-primary">Call us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection