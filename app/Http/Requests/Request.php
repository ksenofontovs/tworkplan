<?php

namespace App\Http\Requests;

use Illuminate\Http\Request as BaseRequest;

class Request extends BaseRequest
{

    public function getRequestData(): array
    {
        return $this->except(['_token', '_method']);
    }
}
