<?php

namespace App\Lake\Modules\Birds\Finder\Exceptions;

class CountDucksDatabaseException extends \Exception
{
    public function __construct(\Throwable $previous = null, string $message = '', int $code = 0)
    {
        parent::__construct($message, $code, $previous);
    }
}
