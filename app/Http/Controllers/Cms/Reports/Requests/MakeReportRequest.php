<?php

namespace App\Http\Controllers\Cms\Reports\Requests;

use App\Http\Requests\FormRequest;

class MakeReportRequest extends FormRequest
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
            'semester_id' => 'required|integer',
            'discipline_id' => 'required|integer',
            'group_id' => 'required|integer',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
        ];
    }
}
