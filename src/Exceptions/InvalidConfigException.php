<?php
namespace Chunrongl\TqigouRpcClient\Exceptions;

class InvalidConfigException extends \Exception
{
    public function __construct($message, $raw = [], $code = 2)
    {
        parent::__construct($message, $raw, $code);
    }
}