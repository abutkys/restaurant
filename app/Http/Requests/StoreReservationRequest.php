<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'name' => 'required',
            'lastname'=>'required',
            'email' => 'required',
            'people_number'=> 'required',
            'phone_number'=> 'required',
            'date'=> 'required',
            'time'=> 'required',
        ];
    }

    public function messages() {
        return [
        'name.required' => 'Please enter your name',
        'lastname.required' => 'Please enter your lastname',
        'email.required' => 'Please enter your email',
        'people_number.required' => 'Please fill people amount',
        'phone_number.required' => 'Please enter your phone number',
        'date.required' => 'Please choose the date',
        'time.required' => 'Please choose the time',
        ];
    }
}
