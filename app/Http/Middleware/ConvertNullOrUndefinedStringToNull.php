<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;
use Illuminate\Http\Request;

class ConvertNullOrUndefinedStringToNull extends TransformsRequest
{
    /**
     * Handle an incoming request.
     *
     * @param $key
     * @param mixed $value
     * @return mixed
     */
    public function transform($key, $value)
    {
        return is_string($value) && ($value === 'null' || $value === 'undefined') ? null : $value;
    }
}
