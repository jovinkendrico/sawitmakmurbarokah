<?php

namespace App\Http\Requests\Admin\Master\Blok;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlokRequest extends FormRequest
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
            'nama' => 'required|unique:bloks,nama|max:255',
            'luas' => 'required',
            'jlhpokok' => 'required|integer',
            'tahuntanam' => 'required',
        ];
    }
}
