<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

class FormRequest extends BaseFormRequest
{

    public function getFormData(): array
    {
        return $this->except(['_token', '_method']);
    }
}
