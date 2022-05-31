<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Kode_Obat'=>'required',
            'Nama_obat'=>'required',
            'id_supplai'=>'required',
            'id_jenis'=>'required',
            'Stok'=>'required',
            'Harga'=>'required|numeric'
        ];
    }
}
