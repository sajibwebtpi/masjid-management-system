<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // ওটিপি ভেরিফাই রুটকে CSRF থেকে ছাড় দিতে
        $middleware->validateCsrfTokens(except: [
            '*', // আপনার Route URL টি এখানে দিন
            ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
