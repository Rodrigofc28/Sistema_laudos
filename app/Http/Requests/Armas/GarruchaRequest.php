<?php

/*
 * Developed by Milena Mognon
 */

namespace App\Http\Requests\Armas;

use Illuminate\Foundation\Http\FormRequest;

class GarruchaRequest extends FormRequest
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
            'marca_id' => 'required|integer',
            'calibre_id' => 'nullable|integer',
            'origem_id' => 'required|integer',
            'laudo_id' => 'required|integer',
            'modelo' => 'nullable',
            'tipo_serie' => 'required|between:5,40',
            'num_serie' => 'nullable',
            'quantidade_raias' => 'required|integer|min:0|max:30',
            'comprimento_cano' => 'required',
            'comprimento_total' => 'required',
            'altura' => 'required',
            'sistema_percussao' => 'required|between:5,50',
            'estado_geral' => 'required|between:2,15',
            'funcionamento' => 'required|between:5,25',
            'sentido_raias' => 'required|between:5,30',
            'cabo' => 'required|between:4,30',
            'tipo_acabamento' => 'required|between:5,40',
            'tipo_arma' => 'required|between:5,30',
            'num_canos' => 'required:max:15',
            
            'diametro_cano'=> 'nullable',
            'salva_cadastro'=>'nullable',
           
            'num_lacre' => 'nullable',
            'sistema_disparo'=>'required'
            
        ];
    }
}
