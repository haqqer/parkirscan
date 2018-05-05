<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Mahasiswa;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Requests\ErrorRequest;
use Illuminate\Support\Facades\Input;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa_list = $mahasiswa->all();
        $index = 1;
        return view('Mahasiswa.index', compact('mahasiswa_list','index'));
    }

    public function create()
    {
        return view('Mahasiswa.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'fakultas' => 'required',
            'tahun' => 'required|numeric',
            'nim' => 'required|numeric',
            'nama' => 'required|string',
            'email' => 'required',
            'nohp' => 'required|numeric',
            'depan' => 'required',
            'tengah' => 'required|numeric',
            'belakang' => 'required',
        ]);
       
        $mahasiswa = new Mahasiswa();     
        $mahasiswa->nim = $request['fakultas'] . "." . $request['tahun'] . "." . $request['nim'];
        $mahasiswa->nama = $request['nama'];
        $mahasiswa->plat = $request['depan'] . " " . $request['tengah'] . " " . $request['belakang'];
        
        $code_fak = substr($request['fakultas'], 0, 1);
        $fakultas = substr($request['fakultas'], 0, 3);
        $tahun = $request['tahun'];
        $nim = $mahasiswa->nim;
        // http://mahasiswa.dinus.ac.id/images/foto/E/E11/2014/E11.2014.00655.jpg
        $mahasiswa->foto = 'http://mahasiswa.dinus.ac.id/images/foto/'. $code_fak .'/'. $fakultas .'/'. $tahun . '/'. $nim .'.jpg';
        $mahasiswa->email = $request['email'];
        $mahasiswa->nohp = $request['nohp'];
        if ($validator->fails())
        {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
        $mahasiswa->save();
        
        return redirect('mahasiswa');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $data = json_encode([
            'nama' => $mahasiswa->nim,
            'NIM' => $mahasiswa->nama,
            'plat' => $mahasiswa->plat,
            'email' => '',
            'nohp' => '',
            'PROGDI' => '',
            'url'=> $mahasiswa->foto,
        ]);
        $qrcode = QrCode::format('png')->size(400)->merge('/public/icon_png.png', .2)->generate('api/mahasiswa/'. $mahasiswa->nim);
        return view('Mahasiswa.show', compact('mahasiswa', 'id', 'qrcode'));
    }
    
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('Mahasiswa.edit', compact('mahasiswa', 'id'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'fakultas' => 'required',
            'tahun' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'depan' => 'required',
            'tengah' => 'required',
            'belakang' => 'required',
        ]);

        $mahasiswa = Mahasiswa::find($id);     
        $mahasiswa->nim = $request['fakultas'] . "." . $request['tahun'] . "." . $request['nim'];
        $mahasiswa->nama = $request['nama'];
        $mahasiswa->plat = $request['depan'] . " " . $request['tengah'] . " " . $request['belakang'];
        //FILE UPLOAD Handler
        
        $code_fak = substr($request['fakultas'], 0, 1);
        $fakultas = substr($request['fakultas'], 0, 3);
        $tahun = $request['tahun'];
        $nim = $mahasiswa->nim;
        // http://mahasiswa.dinus.ac.id/images/foto/E/E11/2014/E11.2014.00655.jpg
        $mahasiswa->foto = 'http://mahasiswa.dinus.ac.id/images/foto/'. $code_fak .'/'. $fakultas .'/'. $tahun . '/'. $nim .'.jpg';
        if ($validator->fails())
        {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
        $mahasiswa->update();
        return redirect('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}