<?php

declare(strict_types=1);

namespace App\Presentation\Controller;

use App\Application\UseCase\GetCurrentTimeForCountry;
use App\Infrastructure\Repository\TimeRepository;
use App\Presentation\Routing\Route;

#[Route('/api/data', methods: ['GET'])]
function getData(): string
{
    // Dependency injection - in a real app, this would be handled by a DI container
    $timeRepository = new TimeRepository();
    $useCase = new GetCurrentTimeForCountry($timeRepository);
    
    try {
        $timeInfo = $useCase->execute('France');
        return json_encode($timeInfo->toArray());
    } catch (\Exception $e) {
        http_response_code(500);
        return json_encode(['error' => $e->getMessage()]);
    }
}
