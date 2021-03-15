<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
                    'name' => ['required', 'string'],
                    'website' => ['required', 'string'],
                    'phone' => ['required', 'string'],
                    'email' => ['required', 'string', 'unique:companies'],
                ];
                break;

            case 'PUT':
                $this->rules = [
                    'name' => ['required', 'string'],
                    'website' => ['required', 'string'],
                    'phone' => ['required'],
                    'email' => ['required', 'string', 'unique:companies'],
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
            'name.required' => 'Name is required!',
            'name.string' => 'Name must be a string',
            'website.required' => 'Website is required!',
            'website.string' => 'Website must be a string',
            'phone.required' => 'Phone is required!',
            'email.required' => 'Email is required!',
            'email.unique' => 'Email already taken!'
        ];
    }

    public function allowed()
    {
        return $this->only([
            'name',
            'website',
            'phone',
            'email'
        ]);
    }
}
