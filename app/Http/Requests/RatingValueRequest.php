<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatingValueRequest extends FormRequest
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
                    'value' => ['required', 'integer'],
                    'title' => ['required', 'string'],
                ];
                break;
            case 'PUT':
                $this->rules = [
                    'value' => ['required', 'integer'],
                    'title' => ['required', 'string'],
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
            'value.required' => 'Rating Value is required!',
            'value.integer' => 'Rating Value must be an integer',
            'title.required' => 'Rating title is required!',
            'title.string' => 'Rating title must be a string'
        ];
    }

    public function allowed()
    {
        return $this->only([
            'value',
            'title'
        ]);
    }
}
