<?php

namespace Novocast\ReadOnly;

class ReadOnlyException extends \RuntimeException
{
    /**
     * returns a Runtime exception
     * @param string $model
     * @param string $method
     * @param int $code
     * @param \Throwable $throwable
     * 
     */
    public function __construct(string $model, string $method, int $code = 0, \Throwable $throwable = null)
    {
        parent::__construct("Model $model is read-only. Calling $method method is not allowed.", $code, $throwable);
    }
}
