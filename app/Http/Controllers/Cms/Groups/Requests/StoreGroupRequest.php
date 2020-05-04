<?php

namespace App\Http\Controllers\Cms\Groups\Requests;

use App\Http\Requests\FormRequest;

class StoreGroupRequest extends FormRequest
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
            'specialization' => 'required|max:255|min:3',
            'level' => 'required|integer',
            'year' => 'required|integer',
        ];
    }
}
