@extends('template')

@section('main')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ action('MahasiswaController@index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img width="200px" height="auto" src="{{ asset('profil/' . $mahasiswa->foto) }}" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIM :</strong>
                {{ $mahasiswa->nim }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                {{ $mahasiswa->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plat Motor:</strong>
                {{ $mahasiswa->plat }}
            </div>
        </div>
    </div>
@endsection