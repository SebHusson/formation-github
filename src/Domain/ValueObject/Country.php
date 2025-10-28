<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

readonly class Country
{
    public function __construct(
        private string $name,
        private string $timezone
    ) {
        if (empty($this->name)) {
            throw new \InvalidArgumentException('Country name cannot be empty');
        }
        if (empty($this->timezone)) {
            throw new \InvalidArgumentException('Timezone cannot be empty');
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }
}
