<?php


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Models\Bootcamp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 /**
 * @OA\Put(
 *     path="/users/{id}",
 *     summary="Updates a user",
 *     @OA\Parameter(
 *         description="Parameter with mutliple examples",
 *         in="path",
 *         name="id",
 *         required=true,
 *         @OA\Schema(type="string"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *         @OA\Examples(example="uuid", value="0006faf6-7a61-426c-9034-579f2cfcfa83", summary="An UUID value."),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     )
 * )
 */

Route::prefix('/api')->group(function () {
    Route::get('/user', function (Request $request) {
        // Check if the user is authenticated
        $user = $request->user();

        // If the user is authenticated, return the user; otherwise, return null with a 200 status
        return response()->json($user, 200);
    })->middleware('auth:sanctum');

    Route::post('/login/send', [AuthController::class, 'sendCode']);
    Route::post('/login/validate', [AuthController::class, 'validateCode']);
    Route::controller(BootcampController::class)->prefix('/bootcamps')->group(function () {
        Route::get('/', 'index');
        Route::get('/{slug}', 'show');
    });

    Route::get('/categories', [CategoryController::class, 'index']);

    Route::get('/cupons/check/{code}', [PaymentController::class, 'checkCupon']);
    Route::post('/campains/submit', [CampaignController::class, 'submit']);
    Route::prefix('/student')->middleware('auth:sanctum')->group(function () {

        Route::controller(BootcampController::class)->prefix('/bootcamps')->group(function () {
            Route::get('/', 'get_student_bootcamps');
            Route::get('/license/{bootcamp_id}', 'get_bootcamp_license');
        });
        Route::controller(StudentController::class)->group(function () {
            Route::get('/me', 'get');
            Route::post('/update', 'update');
            Route::put('/wishlist/{bootcamp_id}', 'add_wishlist');
            Route::put('/review/{id}' , 'submit_review');
        });

        Route::controller(PaymentController::class)->prefix('/payment')->group(function () {
            Route::post('/send', [PaymentController::class, 'send']);
            Route::get('/verify', [PaymentController::class, 'verify']);
        });
    });
});
