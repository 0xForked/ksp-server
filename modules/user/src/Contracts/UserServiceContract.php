<?php

namespace Bakode\User\Contracts;

use Bakode\User\Contracts\DataTransferObjects\UserDto;

interface UserServiceContract
{
    /**
     * Get product by product id.
     *
     * @param int $productId
     * @return \Bakode\User\Contracts\DataTransferObjects\UserDto
     *
     * @throws \Bakode\User\Contracts\Exceptions\UserNotFoundException
     */
    public function getUserById(int $productId): UserDto;
}
