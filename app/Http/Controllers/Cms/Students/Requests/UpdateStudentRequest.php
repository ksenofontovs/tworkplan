<?php

namespace App\Http\Controllers\Cms\Students\Requests;

use App\Http\Requests\FormRequest;

class UpdateStudentRequest extends StoreStudentRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:3',
            'group_id' => 'integer',
            'subgroup' => 'integer',
        ];
    }
}
