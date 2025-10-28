<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Domain\ValueObject\Country;
use App\Domain\Entity\TimeInfo;

final class TimeInfoTest extends TestCase
{
    public function testGettersAndFormatting(): void
    {
        $country = new Country('France', 'Europe/Paris');
        $dt = new \DateTimeImmutable('2020-01-01 15:30:00', new \DateTimeZone('Europe/Paris'));

        $timeInfo = new TimeInfo($country, $dt);

        $this->assertSame($country, $timeInfo->getCountry());
        $this->assertSame($dt, $timeInfo->getCurrentTime());
        $this->assertSame('15:30', $timeInfo->getFormattedTime());

        $arr = $timeInfo->toArray();
        $this->assertArrayHasKey('message', $arr);
        $this->assertStringContainsString('France', $arr['message']);
        $this->assertStringContainsString('15:30', $arr['message']);
    }
}

// ...existing code...
