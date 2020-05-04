<?php

namespace App\Http\Controllers\Cms\Schedules\Requests;

use App\Http\Requests\FormRequest;

class StoreScheduleRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'group_id' => 'required|integer',
            'subgroup' => 'integer',
            'discipline_id' => 'required|integer',
            'lesson_type_id' => 'required|integer',
            'odd_even' => 'integer',
            'half_lesson' => 'integer',
            'semester_id' => 'required|integer',
            'lesson_day_id' => 'required|integer',
            'lesson_time_id' => 'required|integer',
            'audience' => 'integer',
        ];
    }
}
