@extends('template')

@section('main')
<div class="text-center mb-5">
  <h2>Biodata Mahasiswa</h2>
</div>
      <form method="post" action="{{ action('MahasiswaController@update', $id) }}" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <label for="nim">NIM:</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="fakultas" placeholder="A11" size="3" maxlength="3" value="{{ substr($mahasiswa->nim, 0, 3) }}">
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="tahun" placeholder="2017" size="4" maxlength="4" value="{{ substr($mahasiswa->nim, 4, 4) }}">
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="nim" placeholder="10xxx" size="5" maxlength="5" value="{{ substr($mahasiswa->nim, 9, 14) }}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nama">Nama :</label>
              <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}">
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
              <input type="text" class="form-control" name="depan" placeholder="XX" size="2" value="{{ substr($mahasiswa->plat, 0, 2) }}">
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="tengah" placeholder="YYYY" size="4" value="{{ substr($mahasiswa->plat, 2, 3) }}">
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="belakang" placeholder="ZZ" size="2" value="{{ substr($mahasiswa->plat, 6, 8) }}">
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