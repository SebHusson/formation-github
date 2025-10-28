<?php

declare(strict_types=1);

namespace App\Presentation\Routing;

use Attribute;

#[Attribute(Attribute::TARGET_FUNCTION)]
class Route
{
    public function __construct(
        public readonly string $path,
        public readonly array $methods = ['GET']
    ) {
    }
}
