<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check(); 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'description' => 'required',
            'web' => 'required',
            'menu' => 'required',
            'phone_number' => 'required|max:15',
            'city_id' => 'required',
            'establishment_id' => 'required',
            'food_id' => 'required',
            'environment_id' => 'required',
            'price_id' => 'required',
            'img' => 'required',
        ];
    }
}
