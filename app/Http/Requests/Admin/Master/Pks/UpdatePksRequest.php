<?php

namespace App\Http\Requests\Admin\Master\Pks;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePksRequest extends FormRequest
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
            //
            'nama' => 'required|unique:pks,nama,'. $id .'|max:255',
            'alamatpks' => 'nullable',
            'alamatkantor' => 'nullable',
            'email' => 'nullable|max:100',
            'notelp' => 'nullable|max:14',
        ];
    }
}
