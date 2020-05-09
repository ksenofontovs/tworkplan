<?php

namespace App\Http\Controllers\Cms\VisitLogs\Requests;

use App\Http\Requests\FormRequest;

class StoreVisitLogRequest extends FormRequest
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
            'date' => 'required|date',
            'student_id' => 'integer',
            'schedule_id' => 'integer',
            'absent.*' => 'boolean',
            'mark.*' => ['integer', 'nullable', 'regex:/2|3|4|5/'],
        ];
    }
}
