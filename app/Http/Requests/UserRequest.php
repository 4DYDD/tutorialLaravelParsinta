<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'string'],
            'username' => ['required', 'string', Rule::unique('users', 'username')->ignore($this->user?->id)],
            'email' => ['required', 'email',  Rule::unique('users', 'email')->ignore($this->user?->id)],
            'password' => ['required', 'min:8'],
        ];
    }
}
