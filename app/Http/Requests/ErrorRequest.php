<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fakultas' => 'required|max:3',
            'tahun' => 'required|max:4',
            'nim' => 'required',
            'nama' => 'required|min:3',
            'email' => 'required',
            'nohp' => 'required|min:11',
        ];
    }

    public function messages()
    {
        return [
            'fakultas.required' => 'Kode Fakultas tidak boleh kosong',
            'fakultas.required' => 'Kode Fakultas tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'nohp.required' => 'No HP tidak boleh kosong',
            'nohp.min' => 'No HP minimal 11 karakter',
        ];

    }
}
