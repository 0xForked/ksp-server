<?php

use Bakode\User\Application\Http\Controllers\PermissionController;
use Bakode\User\Application\Http\Controllers\RoleController;
use Bakode\User\Application\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')
    ->middleware(['api', 'auth:sanctum'])
    ->namespace('Bakode\User\Application\Http\Controllers')
    ->group(function () {
        Route::apiResource(
            'users',
            UserController::class
        );

        Route::apiResource(
            'roles',
            RoleController::class
        );

        Route::apiResource(
            'permissions',
            PermissionController::class
        );
    });
