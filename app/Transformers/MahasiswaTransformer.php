<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Mahasiswa;

class MahasiswaTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Mahasiswa $mahasiswa)
    {
        return [
            'nim' => $mahasiswa->nim,
            'nama' => $mahasiswa->nama,
            'published' => $mahasiswa->created_at->diffForHumans()
        ];
    }
}
