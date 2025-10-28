<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\TimeInfo;

interface TimeRepositoryInterface
{
    public function getCurrentTimeForCountry(string $countryName): TimeInfo;
}
