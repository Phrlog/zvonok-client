<?php

namespace Phrlog\Zvonok\Exception;

use Throwable;

/**
 * Class UnknownRequestException
 */
class UnknownRequestException extends \RuntimeException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("Request with class $message not supported", $code, $previous);
    }
}
