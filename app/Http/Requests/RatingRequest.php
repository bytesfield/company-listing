<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
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
                    'entity_id' => ['required', 'integer'],
                    'rating_value_id' => ['required', 'integer'],
                ];
                break;
            case 'PUT':
                $this->rules = [
                    'entity_id' => ['required', 'integer'],
                    'rating_value_id' => ['required', 'integer'],
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
            'entity_id.required' => 'Entity ID is required!',
            'entity_id.integer' => 'Entity ID must be an integer',
            'rating_value_id.required' => 'Rating Value ID is required!',
            'rating_value_id.integer' => 'Rating Value  ID must be an integer',
        ];
    }
}
