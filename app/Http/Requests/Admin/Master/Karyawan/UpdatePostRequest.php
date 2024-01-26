<?php

namespace App\Http\Requests\Admin\Master\Karyawan;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            'nik' => 'required|unique:karyawans,nik,'. $id .'|min:16|max:16',
            'nama' => 'required|max:255',
            'jk' => 'required|in:l,p',
            'alamat' => 'required|max:255',
            'jabatan' => 'required|in:Panen,Perawatan,Muat,Supir,Kernek Supir,Mandor Panen,Mandor Perawatan,Krani Admin,Operator Alat Berat,Helver Alat Berat,Manager,Mandor Lapangan,Centeng',
            'tglmasuk' => 'required|date',
        ];
    }
}
