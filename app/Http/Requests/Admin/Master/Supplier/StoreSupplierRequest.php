<?php

namespace App\Http\Requests\Admin\Master\Supplier;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'nama' => 'required|unique:suppliers,nama|max:100',
            'alias' => 'required|max:100',
            'alamat' => 'nullable|max:255',
            'email' => 'nullable|max:100',
            'notelp' => 'nullable|max:15',

        ];
    }
}
