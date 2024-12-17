<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Handle login Request
 * @property-read string $email
 * @property-read string $password
 */

class MakeLoginRequest extends FormRequest
{

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
            'email' => ['required', 'email'],
            'password' => 'required',
        ];
    }

    public function attempt(): bool
    {
        $user = User::query()->where('email', '=', $this->email)->first();

        if ($user) {


            if (Hash::check($this->password, $user->password)) {
                auth()->login($user);
                return true;
            }
        }

        return false;
    }
}
