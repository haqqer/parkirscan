<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

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
        // request()->validate([
        //     'nim' => 'required',
        //     'nama' => 'required',
        //     'plat' => 'required'
        // ]);
        
        $mahasiswa = new Mahasiswa();     
        $mahasiswa->nim = $request['fakultas'] . "." . $request['tahun'] . "." . $request['nim'];
        $mahasiswa->nama = $request['nama'];
        $mahasiswa->plat = $request['depan'] . " " . $request['tengah'] . " " . $request['belakang'];
        //FILE UPLOAD Handler
        $file = $request->file('foto');
        $fileName = uniqid('img_') . '.jpg';
        $request->file('foto')->move("profil/", $fileName);

        $mahasiswa->foto = $fileName;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('Mahasiswa.show', compact('mahasiswa', 'id'));
    }
    
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('Mahasiswa.edit', compact('mahasiswa', 'id'));
    }

    public function update(Request $request, $id)
    {
        // $request = $request->validate([
        //     'nim' => 'required|max:14',
        //     'nama' => 'required',
        //     'plat' => 'required'
        // ]);

        $mahasiswa = Mahasiswa::find($id);     
        $mahasiswa->nim = $request['fakultas'] . "." . $request['tahun'] . "." . $request['nim'];
        $mahasiswa->nama = $request['nama'];
        $mahasiswa->plat = $request['depan'] . " " . $request['tengah'] . " " . $request['belakang'];
        //FILE UPLOAD Handler
        if($request->file('foto') == '')
        {
            $mahasiswa->foto = $mahasiswa->foto;
        }
        else
        {
            $file = $request->file('foto');
            $fileName = uniqid('img_') . '.jpg';
            $request->file('foto')->move("profil/", $fileName);
    
            $mahasiswa->foto = $fileName;
           
        }
        $mahasiswa->update();
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}