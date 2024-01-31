<?php

namespace App\Http\Requests\Admin\Laporan\Transaksi\PenjualanBrondolan;

use Illuminate\Foundation\Http\FormRequest;

class StoreLaporanPenjualanBrondolanRequest extends FormRequest
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
            'periodebulan' => 'nullable|string',
            'periodetahun' => 'nullable|integer|min:1990|max:2100',
            'rotasi' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'id_armada' => 'nullable|integer',
            'id_pks' => 'nullable|integer',
            'id_supplier' => 'nullable|integer',
            'ketlunas' => 'nullable|string',
            'status' => 'nullable|string',
        ];
    }
}
