<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePlantRequest extends FormRequest
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
                "name"=> "required|string|min:3|max:20",
                "species"=> "required|string|min:3|max:20",
                "habitat"=> "required|string|min:3|max:40",
                "exposure"=> "required|string|min:3|max:30",
                "description"=> "required|min:20|max:200",
                "image"=> "required|url"
        ];
    }

    public function messages(){
       return [
        "name.min" => "il nome deve essere almeno lungo 3 caratteri",
        "species.min" => "la specie deve essere almeno lunga 3 caratteri",
        "habitat.min" => "habitat deve essere almeno lungo 3 caratteri",
        "exposure.min" => "l'esposzione deve essere almeno lunga 3 caratteri",
        "description.min" => "la descrizione deve essere almeno lunga 20 caratteri",
       ];

    }
}