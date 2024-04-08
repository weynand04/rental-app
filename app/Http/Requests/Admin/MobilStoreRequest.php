<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MobilStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|string|max:255',
            'harga_sewa' => 'required|integer',
            'gambar' => 'required|image',
            'bahan_bakar' => 'required|string|max:255',
            'jumlah_kursi' => 'required|string|max:255',
            'transmisi' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'p3k' => 'required|boolean',
            'charger' => 'required|boolean',
            'Audio' => 'required|boolean',
            'ac' => 'required|boolean',
        ];
    }
}
