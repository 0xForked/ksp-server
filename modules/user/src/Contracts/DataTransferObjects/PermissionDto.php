<?php

declare(strict_types=1);

namespace Bakode\User\Contracts\DataTransferObjects;

class PermissionDto
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}
