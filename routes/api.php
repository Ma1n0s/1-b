<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\RegisterCompController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\CompanyController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/RegisterComp', [RegisterCompController::class, 'create']);

// Route::post('/AddComment', [CommentController::class, 'create']);


// Route::get('/filters', [FilterController::class, 'getFiltersByCategory']);

Route::get('/companies', [CompanyController::class, 'index']);
Route::post('/companies', [CompanyController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/comments', [CommentController::class, 'index']);
    Route::post('/comments', [CommentController::class, 'store']);
});



Route::get('/comments', function(Request $request) {
    return "123";
});

Route::post('/register', function(Request $request) {
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'password_confirmation' => bcrypt($request->password_confirmation)
    ]);
    $token = $user->createToken('auth_token')->plainTextToken;
    Auth::login($user, true); // true чтобы запоминанил
    
    return [
        'user' => $user,
        'token'=> $token
    ];
});

Route::post('/login', function(Request $request) {
    $data = $request->validate([
        'email' => ['required', 'email', 'exists:users,email'],
        'password' => ['required', 'min:6'],
    ]);

    if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
        $user = User::where('email', $data['email'])->first();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    return response()->json(['error' => 'Invalid credentials'], 401);
});

Route::post('/logout', function(Request $request) {
    $user = Auth::guard('sanctum')->user();

        $user->User::currentAccessToken()->delete();
        return response()->json(['message' => 'Successfully logged out']);

    return response()->json(['message' => 'Unauthorized'], 401);
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user', function (Request $request) {
    return response()->json($request->user());
})->middleware('auth:sanctum');

Route::get('/data', function () {
    return "123";
});


