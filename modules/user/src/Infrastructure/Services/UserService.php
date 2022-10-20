<?php

declare(strict_types=1);

namespace Bakode\User\Infrastructure\Services;

use Bakode\User\Contracts\DataTransferObjects\UserDto;
use Bakode\User\Contracts\UserServiceContract;

class UserService implements UserServiceContract
{
    public function getUserById(int $productId): UserDto
    {
        return new UserDto(
            0, ""
        );
    }
}
