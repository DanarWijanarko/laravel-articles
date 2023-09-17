<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'username' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Field Nama Harus Diisi !',
            'name.regex' => 'Field Nama Harus Berupa Huruf A-Z !',
            'username.required' => 'Field Username Harus Diisi !',
            'username.min' => 'Field Username Harus Memiliki Minimal 5 Karakter !',
            'email.required' => 'Field Email Harus Diisi !',
            'email.unique' => 'Field Email Sudah Terdaftar !',
            'email.email' => 'Field Email Harus Menggunakan Email yang Valid !',
            'password.required' => 'Field Password Harus Diisi !',
            'password.min' => 'Field Password Harus Memiliki Minimal 5 Karakter !',
        ];
    }
}
