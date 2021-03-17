<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $method = $this->method();

        if (null !== $this->get('_method', null)) {

            $method = $this->get('_method');
        }
        $this->offsetUnset('_method');

        switch ($method) {

            case 'POST':
                $this->rules = [
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ];
                break;
            default:
                break;
        }

        return $this->rules;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'email.email' => 'Must be a valid email',
            'password.required' => 'Password is required!',
        ];
    }
}
