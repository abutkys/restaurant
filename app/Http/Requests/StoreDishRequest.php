<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
            'title' => 'required',
            'description'=>'required',
            'image_url' => 'required',
            'price'=> 'required',
        ];
    }
    public function messages() {
        return [
        'title.required' => 'Please enter the title',
        'description.required' => 'Please enter the description',
        'image_url.required' => 'Please enter the image_url',
        'price.required' => 'Please enter the Price',
        ];
    }
}
