<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:2|max:20',
            'reading_time' => 'numeric|max:60',
            'text' => 'required|min:5',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Devi inserire il titolo del post',
            'title.min' => 'Il titolo del post deve avere almeno :min caratteri',
            'title.max' => 'Il titolo del post non può avere più di :max caratteri',
            'reading_time.max' => 'Il tempo di lettura non può avere più di :max minuti',
            'reading_time.numeric' => 'Il tempo di lettura deve essere un numero',
            'text.required' => 'Il testo del post non può essere vuoto',
            'text.min' =>  'Il testo del post deve avere almeno :min caratteri'
        ];
    }
}
