<?php

namespace App\Http\Requests\Guru;

use Illuminate\Foundation\Http\FormRequest;

class GuruUpdateRequest extends FormRequest
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
        $guru = $this->route('guru');
        $id = is_object($guru) ? $guru->id : $guru;

        return [
            'user_id'      => 'sometimes|required|exists:users,id|unique:guru,user_id,' . $id,
            'gender'       => 'sometimes|required|in:laki-laki,perempuan',
            'email'        => 'sometimes|required|email|unique:guru,email,' . $id,
            'nama'         => 'sometimes|required|string|max:255',
            'nip'          => 'nullable|string|unique:guru,nip,' . $id,
            'tempat_lahir' => 'nullable|string',
            'tgl_lahir'    => 'nullable|date',
            'phone_number' => 'nullable|string|max:15',
            'alamat'       => 'nullable|string',
            'pendidikan'   => 'nullable|string',
        ];
    }
}
