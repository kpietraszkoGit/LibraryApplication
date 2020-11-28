<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagesRequest extends FormRequest
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
        return [
            'title' => 'required|max:255',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required and cannot contain more than 255 characters.',
            'description.required' => 'The content field is required.'
        ];
    }
}
