<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            "marca" => "required|max:30",
            "modello" => "required|max:40",
            "alimentazione" => "required|max:15",
            "prezzo" => "required|numeric",
            "num_porte" => "required|numeric",
            "colore" => "required",
            "anno" => "required",
            
        ];
    }
    public function messages(){
        return [
            "marca.required" => "Il campo marca è obbligatorio",
            "marca.max" => "Il campo marca deve essere di massimo 30 caratteri",
            "modello.required" => "Il campo modello è obbligatorio",
            "modello.max" => "Il campo modello deve essere di massimo 40 caratteri",
            "alimentazione.required" => "Il campo alimentazione è obbligatorio",
            "alimentazione.max" => "Il campo alimentazione deve essere di massimo 15 caratteri",
            "prezzo.required" => "Il campo prezzo è obbligatorio",
            "prezzo.max" => "Il campo prezzo deve essere un numero",
            "num_porte.required" => "Il campo num_porte è obbligatorio",
            "num_porte.max" => "Il campo num_porte deve essere un numero",
            "colore.required" => "Il campo colore è obbligatorio",
            "anno.required" => "Il campo anno è obbligatorio",
           
           
        ];
    }
}
