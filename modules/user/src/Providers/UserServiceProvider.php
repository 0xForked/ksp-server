<?php

declare(strict_types=1);

namespace Laracon\Inventory\Providers;

use Bakode\User\Infrastructure\Services\UserService;
use Illuminate\Support\ServiceProvider;
use Bakode\User\Contracts\UserServiceContract as UserServiceContract;


class UserServiceProvider extends ServiceProvider
{
    /**
     * All the container bindings that should be registered.
     *
     * @var array
     */
    public array $bindings = [
        UserServiceContract::class => UserService::class,
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');

        $this->loadMigrationsFrom(__DIR__.'/../Infrastructure/Database/Migrations');

        // $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'inventory');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // manually register bindings
        // $this->app->bind(ProductServiceContract::class, ProductService::class);
    }
}
