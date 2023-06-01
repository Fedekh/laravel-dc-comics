<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|min:2|max:255',
            'series' => 'required|min:3|max:140',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:100',
            
        ];
    }

      /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'Il titolo è richiesto e deve essere lungo almeno 5 caratteri',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'title.max' => 'Il titolo non deve superare :max caratteri',
            'description.required' => 'La tipologia è richiesta',
            'thumb.required' => 'L\'immagine è richiesta',
            'price.required' => 'Il prezzo è richiesto',
            'price.min' => 'Il prezzo deve essere lungo almeno :min caratteri',
            'price.max' => 'Il prezzo non deve superare :max caratteri',
            'series.required' => 'La serie è richiesta',
            'series.min' => 'La serie deve essere lunga almeno :min caratteri',
            'series.max' => 'La serie non deve superare :max caratteri',
            'sale_date.required' => 'La data di vendita è richiesta',
            'type.required' => 'Il tipo è richiesto',
            'type.min' => 'Il tipo deve essere lungo almeno :min caratteri',
            'type.max' => 'Il tipo non deve superare :max caratteri'
            

        ];
    }
}
