<?php declare(strict_types=1);

namespace AlanVdb\Validator;

use AlanVdb\Validator\Definition\ValidatorResolverInterface;
use AlanVdb\Validator\Definition\ValidatorInterface;

class ValidatorResolver implements ValidatorResolverInterface
{
    public function __construct(
        protected ValidatorInterface $validator
    ) {}

    public function __invoke(mixed $value): bool
    {
        return $this->validator->validate($value);
    }

    public function getErrorMessage(): string
    {
        return $this->validator->getErrorMessage();
    }

    public function getErrorCode(): int
    {
        return $this->validator->getErrorCode();
    }
}
