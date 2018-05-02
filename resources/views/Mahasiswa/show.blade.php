@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="float-left">
                <h2>Detail Mahasiswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ action('MahasiswaController@index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row m-5">
        <div class="col-md-4">
            <img width="200px" height="auto" src="{{  $mahasiswa->foto }}" alt="">
        </div>
        <div class="col-md-4">
            <table>
                <tbody>
                    <tr>
                        <th>NIM</th>
                        <td>: {{ $mahasiswa->nim }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>: {{ $mahasiswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>Plat Motor </th>
                        <td>: {{ $mahasiswa->plat }}</td>
                    </tr>
                    <tr>
                        <th>Email </th>
                        <td>: {{ $mahasiswa->email }}</td>
                    </tr>
                    <tr>
                        <th>No HP </th>
                        <td>: {{ $mahasiswa->nohp }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-4">
            <strong>QrCode:</strong>
            <img src="data:image/png;base64, {!! base64_encode($qrcode) !!}" alt=""><br>
            <a href="data:image/png;base64, {!! base64_encode($qrcode) !!}" download>Download</a>
        </div>
    </div>
</div>
@endsection