<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\Country;

readonly class TimeInfo
{
    public function __construct(
        private Country $country,
        private \DateTimeImmutable $currentTime
    ) {
    }

    public function getCountry(): Country
    {
        return $this->country;
    }

    public function getCurrentTime(): \DateTimeImmutable
    {
        return $this->currentTime;
    }

    public function getFormattedTime(string $format = 'H:i'): string
    {
        return $this->currentTime->format($format);
    }

    public function toArray(): array
    {
        return [
            'message' => sprintf(
                '%s => %s',
                $this->country->getName(),
                $this->getFormattedTime()
            )
        ];
    }
}
