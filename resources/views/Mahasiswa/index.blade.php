@extends('layouts.app')

@section('content')
<div class="container">
  <input type='hidden' id='sort' value='asc'>
  <table id='mhsTable' class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th><span onclick="sortTable('nim');">NIM</span></th>
          <th><span onclick="sortTable('nama');">Nama</span></th>
          <th>Plat</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($mahasiswa_list as $mahasiswa)
        
        <a href="{{ action('MahasiswaController@show', $mahasiswa['id']) }}">
        <tr>
          <td>{{ $index++ }}</td>
          <td>{{$mahasiswa['nim']}}</td>
          <td>{{$mahasiswa['nama']}}</td>
          <td>{{$mahasiswa['plat']}}</td>
          <td>
            
            <a href="{{ action('MahasiswaController@show', $mahasiswa['id']) }}" class="btn btn-success">Detail</a>    
          </td>
          <td>
            <form action="{{action('MahasiswaController@destroy', $mahasiswa['id'])}}" method="post">
              @csrf
              <input name="_method" type="hidden" value="DELETE">
              <a href="{{ action('MahasiswaController@edit', $mahasiswa['id']) }}" class="btn btn-primary">Edit</a>
              <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
            </form>
          </td>
        </tr></a>
        @endforeach
      </tbody>
    </table>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
      Tambah Mahasiswa
    </button> -->
  </div>
  <script>
    
  </script>
@stop
