<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'title' => 'required|min:2|max:100|unique:comics',
            'description' => 'required',
            'price' => 'required',
            'sale_date' => 'required',
            'series' => 'required',
            'type' => 'required',
            'thumb' => 'nullable',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'title.unique' => 'Il titolo deve essere univoco',
            'description.required' => 'La descrizione è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'sale_date.required' => 'La data di uscita è obbligatoria',
            'series.required' => 'La serie è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
        ];
    }
}
