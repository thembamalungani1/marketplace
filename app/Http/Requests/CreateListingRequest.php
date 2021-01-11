<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateListingRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'slug'  => 'string|max:255',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'required|min:50|max:5000',
            'contact_email' => 'required|email',
            'contact_mobile' => 'required',
            'currency_id'  => 'required',
            'category_id'  => 'required'
        ];
    }
}
