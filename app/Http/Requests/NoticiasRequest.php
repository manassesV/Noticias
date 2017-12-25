<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiasRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {

        if (auth()->check()){
            return true;
        }
        
        return false;

}

/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
public function rules() {
    return [
        'titulo' => 'required|max:50|min:10',
        'sub_titulo' => 'required|max:100|min:10',
        'descricao' => 'required|max:500|min:10'
    ];
    }

    /**
     *  Get the validation rule and aplication the message
     * 
     * @return array of message
     */
    public function messages() {
        return[
            'titulo.required' => 'Campo título é requerido',
            'titulo.max' => 'Campo título deve ter menos que 50 caracteres',
            'titulo.min' => 'Campo título deve ter mais que 10 caracteres',
            'sub_titulo.required' => 'Campo sub_título é requerido',
            'sub_titulo.max' => 'Campo sub_título deve ter menos que 100 caracteres',
            'sub_titulo.min' => 'Campo sub_título deve ter mais que 10 caracteres',
            'descricao.required' => 'Campo descrição é requerido',
            'descricao.max' => 'Campo descrição deve ter menos que 500 caracteres',
            'descricao.min' => 'Campo descrição deve ter mais que 10 caracteres',
        ];
    }

}
