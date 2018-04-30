@extends('template')

@section('main')
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Plat</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($mahasiswa_list as $mahasiswa)
      
      <tr>
        <td>{{ $index++ }}</td>
        <td>{{$mahasiswa['nim']}}</td>
        <td>{{$mahasiswa['nama']}}</td>
        <td>{{$mahasiswa['plat']}}</td>
        <td>
          <a href="{{ action('MahasiswaController@edit', $mahasiswa['id']) }}" class="btn btn-primary">Edit</a>
          <a href="{{ action('MahasiswaController@show', $mahasiswa['id']) }}">Detail</a>    
        </td>
        <td>
          <form action="{{action('MahasiswaController@destroy', $mahasiswa['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
    Tambah Mahasiswa
  </button> -->
  <a href="{{ action('MahasiswaController@create') }}">
    <button type="button" class="btn btn-primary">
      Tambah Mahasiswa
    </button>
  </a>

  <!-- CONTENT MODAL -->
  <!-- <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

      <div class="form-handler">
      <div class="text-center mb-5">
        <h2>Biodata Mahasiswa</h2>
      </div>
      <form method="post" action="{{ action('MahasiswaController@store')  }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-2"></div>
          <div class="">
            <label for="nim">NIM:</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group mr-2">
            <input type="text" class="form-control" name="fakultas" placeholder="A11" size="5" >
          </div>
          <div class="form-group mr-2">
            <input type="text" class="form-control" name="tahun" placeholder="2017" size="5">
          </div>
          <div class="form-group ">
            <input type="text" class="form-control" name="nim" placeholder="10xxx" size="5">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-2"></div>
          <div class="">
            <label for="nim">Nama :</label>
          </div>
        </div> 

        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group">    
            <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" size="26">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group">    
            <input type="text" class="form-control" name="nama_belakang" placeholder="Nama belakang" size="26">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-2"></div>
          <div class="">
            <label for="nim">Plat :</label>
          </div>
        </div>  
          <div class="row">
            <div class="col-md-2"></div>
            <div class="form-group mr-2">
              <input type="text" class="form-control" name="depan" placeholder="XX" size="5" >
            </div>
            <div class="form-group mr-2">
              <input type="text" class="form-control" name="tengah" placeholder="YYYY" size="5">
            </div>
            <div class="form-group ">
              <input type="text" class="form-control" name="belakang" placeholder="ZZ" size="5">
            </div>
          </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="">
            <label for="Gambar">Upload Foto Profil</label>
                
         </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group">
            <input type="file" name="foto">
          </div>
        </div>

        <div class="text-center mt-5">
            <button type="submit" class="btn btn-success">Submit</button>
         </div>
      </form>
      </div> 


      </div>
    </div>
  </div> -->
@stop
