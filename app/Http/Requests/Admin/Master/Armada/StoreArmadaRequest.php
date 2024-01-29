<?php

namespace App\Http\Requests\Admin\Master\Armada;

use Illuminate\Foundation\Http\FormRequest;

class StoreArmadaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'nopol' => 'required|unique:armadas,nopol|max:20',
            'alias' => 'required|unique:armadas,alias|max:40',
            'norangka' => 'required|unique:armadas,norangka|max:100',
            'nomesin' => 'required|unique:armadas,nomesin|max:100',
            'merk' => 'required|max:100',
            'type' => 'required|max:100',
            'jenis' => 'required|max:100',
            'model' => 'required|max:100',
            'berlaku' => 'required|date',
            'tahunpembuatan' => 'required',
        ];
    }
}
