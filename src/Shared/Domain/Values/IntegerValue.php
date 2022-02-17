<?php

declare(strict_types=1);

namespace App\Shared\Domain\Values;

class IntegerValue
{
    public int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}