<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pembelianRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nota_beli'=>'required',
            'jmlh_beli'=>'required',
            'harga_beli'=>'required'
        ];
    }
}
