@extends('index')
@section('title', 'dashboard')
@section('content-title')
@section('content')
<div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h6>data project</h6>
      </div>
      <div class="card-body table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Service Name</th>
              <th scope="col">Description</th>
              <th style="width: 15%;" scope="col">Date</th>
              <th scope="col">Status</th>                            
              <th scope="col">Picture</th>                            
              <th scope="col">Action</th>                            

            </tr>
          </thead>
             </table>
        <div class="modal fade" id="detailproject">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h6>form</h6>
      </div>
      <div class="card-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
          <!-- <label class="form-label" for="">service type</label>
          <select class="form-select" name="" id="" >
            <option value="">ui/ux</option>
            <option value="">front-end</option>
            <option value="">back-end</option>
            <option value="">database</option>
          </select> -->
          <label class="form-label" for="">project name</label>
          <input class="form-control" type="text" name="servis" id="servis" required > 
          <label class="form-label" for="">project date</label>
          <input class="form-control" type="date" name="date" id="date" required>
          <label class="form-label" for="">project picture</label>
          <div>
            <input class="form-control" type="file" name="foto" value="foto" accept="image/*" onchange="preview_image(event)">
            <br>
            <img id="output_image" width="50%">
          </div>
          <label class="form-label" for="">description</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
          <label class="form-label" for="">project status</label>
          <br>
          <label for="status"></label>
          <select name="status" id="status">
              <option value="progress">progress</option>
              <option value="finished">finished</option>
          </select>
          <br>
          <br>
          <input class="btn btn-success" type="submit" value="simpan">
          <input class="btn btn-danger" type="reset" value="cancel">
          <br>
          
        </form>
      </div>
    </div>
  </div>
@endsection
