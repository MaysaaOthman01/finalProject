<?php

namespace App\Exceptions;

use App\Helpers\Helpers;
use Exception;
use Throwable;

class CustomException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render(){

        return response()->json(Helpers::createErrorResponse($this->message),$this->code);
    }
}
