<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable',
            'series' => 'nullable|min:5|max:20',
            'sale_date' => 'nullable',
            'type' => 'nullable|min:5|max:20',
        ];
    }

    function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo è di almeno :min caratteri',
            'title.max' => 'Il titolo è al massimo di :max caratteri',
            'thumb.max' => 'Url immagine consentito di max :max',
            'series.min' => 'Il testo della serie de essere di almeno :min caratteri',
            'series.max' => 'Il testo della serie de essere inferiore a :max caratteri',
            'type.min' => 'Il tipo di fumetto deve essere almeno di :min caratteri',
            'type.max' => 'Il tipo di fumetto deve essere inferiore a :max caratteri',


        ];
    }
}
