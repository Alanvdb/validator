<?php declare(strict_types=1);

namespace AlanVdb\Validator;

use Throwable;

abstract class AbstractValidator
{
    protected string $errorMessage;
    protected int $errorCode;

    public function __construct(string $errorMessage = 'Invalid value', int $errorCode = 0)
    {
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }
}
