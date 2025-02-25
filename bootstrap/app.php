<?php

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        apiPrefix: '/',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (Throwable $e, Request $request) {
            if ($request->is('api/*')) {
                if ($e instanceof AuthenticationException) {
                    return response()->json([
                        'status' => false,
                        'message' => "Unauthenticated",
                        'data' => null
                    ], 401);
                } elseif ($e instanceof NotFoundHttpException || $e instanceof ModelNotFoundException) {
                    return response()->json([
                        'status' => false,
                        'message' => "Not found",
                        'data' => null
                    ], 404);
                }
            }

            // if (strpos($request->getHost(), 'api.') !== false) {
            //     if ($e instanceof AuthenticationException) {
            //         return response()->json([
            //             'status' => false,
            //             'message' => "Unauthenticated",
            //             'data' => null
            //         ], 401);
            //     } elseif ($e instanceof NotFoundHttpException || $e instanceof ModelNotFoundException) {
            //         return response()->json([
            //             'status' => false,
            //             'message' => "Not found",
            //             'data' => null
            //         ], 404);
            //     }
        
            //     // If the exception is not one of those handled, fall through to the default handling
            //     return parent::render($request, $e);
            // }
        });
    })->create();
