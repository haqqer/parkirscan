@extends('template')

@section('main')
<div class="text-center mb-5">
  <h2>Biodata Mahasiswa</h2>
</div>
      <form method="post" action="{{ action('MahasiswaController@store')  }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <label for="nim">NIM:</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="fakultas" placeholder="A11" size="3" >
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="tahun" placeholder="2017" size="4">
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="nim" placeholder="10xxx" size="5">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nama">Nama :</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <label for="nim">Plat :</label>
          </div>
        </div>  
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="depan" placeholder="XX" size="3" >
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="tengah" placeholder="YYYY" size="4">
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="belakang" placeholder="ZZ" size="2">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Gambar">Upload Foto Profil</label>
            <input type="file" name="foto">    
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
@stop