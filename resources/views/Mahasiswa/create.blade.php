@extends('template')

@section('main')
<div class="text-center mb-5">
  <h2>Biodata Mahasiswa</h2>
</div>
      <form method="post" action="{{ action('MahasiswaController@store')  }}" enctype="multipart/form-data">
        @csrf
          @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          @endif
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <label for="nim">NIM:</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" id="prodi" name="fakultas" placeholder="A11" size="3" maxlength="3">
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="tahun" placeholder="2017" size="4" maxlength="4">
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="nim" placeholder="10xxx" size="5" maxlength="5">
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
            <div class="form-group col-md-4">
              <label for="nama">Email :</label>
              <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nama">No HP :</label>
              <input type="text" class="form-control" name="nohp" placeholder="Email">
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
              <input type="text" class="form-control" name="depan" placeholder="XX" size="3" maxlength="3">
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="tengah" placeholder="YYYY" size="4" maxlength="4">
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="belakang" placeholder="ZZ" size="2" maxlength="2">
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
    <script>
      $(document).ready(
      function(){
          var theValue = $('#prodi').val();
          if(theValue === 'A11') {
            $('option[value=Teknik Informatika]')
                .attr('selected',true);
          } else if(theValue === 'A12') {
            $('option[value=Sistem Informasi]')
                .attr('selected',true);
          }
      });
    </script>
@stop