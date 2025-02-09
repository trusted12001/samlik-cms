<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register the route middleware alias using the alias() method.
        $middleware->alias([
            'role' => RoleMiddleware::class,
        ]);
        // You can also register any global middleware here if needed.
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Exception handling configuration.
    })
    ->create();

return $app;
