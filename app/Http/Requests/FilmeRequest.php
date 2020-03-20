<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeRequest extends FormRequest
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
            'title' => 'required',
            'rating' => 'required|numeric|max:10',
            'length' => 'required|numeric',
            'awards' => 'required|numeric',
            'genre_id' => 'required',
            'dia' => 'required',
            'mes' => 'required',
            'ano' =>'required'
        ];
    }

    public function messages ()
    {
        return [
            'title.required' => 'Nome do filme é obrigatório',
            'rating.required' => 'Obrigatório classificação',
            'rating.numeric' => 'Somente números',
            'rating.max' => 'A classificação máxima é 10',
            'awards.required' => 'Obrigatório a premiação',
            'awards.numeric' => 'Somente números',
            'length.required' => 'Obrigatório a duração do filme',
            'length.numeric' => 'Somente números',
            'dia.required' => 'O dia da estréia é obrigatória',
            'mes.required' => 'O mês da estréia é obrigatório',
            'ano.required' => 'O ano da estréia é obrigatório'
        ];
    }
}
