<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\Entity\TimeInfo;
use App\Domain\Repository\TimeRepositoryInterface;
use App\Domain\ValueObject\Country;

class TimeRepository implements TimeRepositoryInterface
{
    private const array COUNTRY_TIMEZONES = [
        'France' => 'Europe/Paris',
        'USA' => 'America/New_York',
        'Japan' => 'Asia/Tokyo',
        'Australia' => 'Australia/Sydney',
        'Brazil' => 'America/Sao_Paulo',
        'UK' => 'Europe/London',
        'Germany' => 'Europe/Berlin',
        'India' => 'Asia/Kolkata',
        'China' => 'Asia/Shanghai',
        'Canada' => 'America/Toronto',
    ];

    public function getCurrentTimeForCountry(string $countryName): TimeInfo
    {
        $timezone = $this->getTimezoneForCountry($countryName);
        $country = new Country($countryName, $timezone);
        
        $dateTimeZone = new \DateTimeZone($timezone);
        $currentTime = new \DateTimeImmutable('now', $dateTimeZone);
        
        return new TimeInfo($country, $currentTime);
    }

    private function getTimezoneForCountry(string $countryName): string
    {
        if (!isset(self::COUNTRY_TIMEZONES[$countryName])) {
            throw new \InvalidArgumentException(
                sprintf('Timezone not found for country: %s', $countryName)
            );
        }
        
        return self::COUNTRY_TIMEZONES[$countryName];
    }
}
