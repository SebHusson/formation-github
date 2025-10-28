<?php

declare(strict_types=1);

namespace App\Application\UseCase;

use App\Domain\Entity\TimeInfo;
use App\Domain\Repository\TimeRepositoryInterface;

readonly class GetCurrentTimeForCountry
{
    public function __construct(
        private TimeRepositoryInterface $timeRepository
    ) {
    }

    public function execute(string $countryName): TimeInfo
    {
        return $this->timeRepository->getCurrentTimeForCountry($countryName);
    }
}
