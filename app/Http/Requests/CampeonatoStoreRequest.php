<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampeonatoStoreRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:campeonatos,slug' . $this->campeonato,
            'user_id' => 'required|integer',
            'body' => 'required',
            'status' => 'required|in:DRAFT,PUBLISHED',
            'data' => 'required'
        ];

        if($this->get('file'))
            $rules = arrat_merge($rules, ['file' => 'mimes:jpg,jpeg,png']);

        return $rules;
    }
}
