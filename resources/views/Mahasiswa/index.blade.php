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
  <a href="{{ action('MahasiswaController@create') }}"><button class="btn btn-primary">Create</button></a>
@stop
