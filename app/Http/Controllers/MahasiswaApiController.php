<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaApiController extends Controller
{
    public function mahasiswa(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa = $mahasiswa->all();
        return response()->json(['items' => $mahasiswa]);
    }

    public function show(Request $request, Mahasiswa $mahasiswa, $nim)
    {
        $mahasiswa = $mahasiswa->where('nim', $nim)->get();
        return response()->json(['items' => $mahasiswa]);
    }
    
}
