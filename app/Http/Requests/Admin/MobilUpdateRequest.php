<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MobilUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required|string|max:255',
            'harga_sewa' => 'required|integer',
            'gambar' => 'image',
            'bahan_bakar' => 'required|string|max:255',
            'jumlah_kursi' => 'required|string|max:255',
            'transmisi' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'p3k' => 'required',
            'charger' => 'required',
            'Audio' => 'required',
            'ac' => 'required',
        ];
    }
}
