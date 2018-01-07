<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|email',
            'raison' => 'required|not_in:0|in:navigation,inscription,connexion,glitch,bug,connexion-serv',
            'importance' => 'required|in:1,2,3,4,5',
            'url' => 'url',
            'message' => 'required|min:10'
        ];
    }
}
