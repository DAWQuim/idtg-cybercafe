<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\{UserController, ClienteController, TrabajadorController, ProductoController, TransaccionController, ReservaController, AreaController, ValoracionController};

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);

    Route::apiResources([
        'users' => UserController::class,
        'clientes' => ClienteController::class,
        'trabajadores' => TrabajadorController::class,
        'productos' => ProductoController::class,
        'transacciones' => TransaccionController::class,
        'reservas' => ReservaController::class,
        'areas' => AreaController::class,
        'valoraciones' => ValoracionController::class,
    ]);
});

