<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            //'email' => ['required', 'email]
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    // Alterando as mensagens de erro na função @error que foi adicionado em adicionar_usuario.blade.php
    public function messages ()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo do e-mail é obrigatório',
            'email.email' => 'O e-mail não esta no formato correto',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'Mínimo de 6 dígitos',
            'password.confirmed' => 'A confirmação da senha deve ser igual a senha'
        ];
    }
}
