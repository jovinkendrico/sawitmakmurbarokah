<?php

namespace App\Http\Requests\Admin\Transaksi\Penjualantbs;

use Illuminate\Foundation\Http\FormRequest;

class StorePenjualantbsRequest extends FormRequest
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
            'periodebulan' =>'required',
            'periodetahun' =>'required',
            'rotasi' => 'required',
            'tanggal' => 'required|date',
            'id_armada' => 'required',
            'id_supplier' => 'required',
            'id_pks' => 'required',
            'weighin' => 'required|integer',
            'weighout'=> 'required|integer',
            'netgross'=> 'required|integer',
            'penalty' => 'required|integer',
            'netweigh'=> 'required|integer',
            'grade' => 'nullable',
            'harga' => 'nullable',
            'total' => 'nullable',
            'pphpercentage' => 'nullable',
            'pph'=> 'nullable',
            'fee'=> 'nullable',
            'netto' => 'nullable',
            'status' => 'nullable',
            'pelunasan' => 'nullable',
            'tgllunas' => 'nullable|date',
            'ketlunas' => 'nullable',
            'keterangan' => 'nullable',
            'ref' => 'nullable',
        ];
    }
}
