@extends('layouts.app')

@section('content')
<div class="container">
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
            <input type="text" class="form-control" id="prodi" name="fakultas" value="{{ old('fakultas') }}" placeholder="A11" size="3" maxlength="3">
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="tahun" value="{{ old('tahun') }}" placeholder="2017" size="4" maxlength="4">
          </div>
          <div class="form-group col-md-auto">
            <input type="text" class="form-control" name="nim" value="{{ old('nim') }}" placeholder="10xxx" size="5" maxlength="5">
          </div>
          @if($errors->has('fakultas') || $errors->has('tahun') || $errors->has('nim'))
            <span class="help-block">{{ $errors->first('nim') }}</span>
          @endif
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
              <label for="nama">Nama :</label>
              <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap">
              @if($errors->has('nama'))
                <span class="help-block">{{ $errors->first('nama') }}</span>
              @endif
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nama">Email :</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
              @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
              @endif             
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nama">No HP :</label>
              <input type="text" class="form-control" name="nohp" value="{{ old('nohp') }}" placeholder="No Hp">
              @if($errors->has('nohp'))
                <span class="help-block">{{ $errors->first('nohp') }}</span>
              @endif    
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
              <input type="text" class="form-control" name="depan" value="{{ old('depan') }}" placeholder="XX" size="3" maxlength="3">
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="tengah" value="{{ old('tengah') }}" placeholder="YYYY" size="4" maxlength="4">
            </div>
            <div class="form-group col-md-auto">
              <input type="text" class="form-control" name="belakang" value="{{ old('belakang') }}" placeholder="ZZ" size="3" maxlength="3">
            </div>
            @if($errors->has('depan') || $errors->has('tengah') || $errors->has('belakang'))
              <span class="help-block">{{ $errors->first('depan') }}</span>
            @endif
          </div>
          
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
</div>   
@stop