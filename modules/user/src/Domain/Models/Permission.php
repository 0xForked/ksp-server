<?php

declare(strict_types=1);

namespace Bakode\User\Domain\Models;

use Bakode\User\Infrastructure\Database\Factories\PermissionFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory(): Factory
    {
        return PermissionFactory::new();
    }
}
