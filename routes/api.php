 <?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/status', function() {
    return response()->json( 
        [
            'status' => 'ok',
            'message' => 'API is running'
        ],
        200
    );
});

Route::apiResource('clients', ClientController::class);

// auth route
Route::post('/login', [AuthController::class, 'login']);