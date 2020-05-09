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
            'student_id' => 'required|integer',
            'schedule_id' => 'required|integer',
            'absent' => 'boolean',
            'mark' => 'integer',
        ];
    }
}
