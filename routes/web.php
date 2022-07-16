<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonagensController;
use App\Models\personagens;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


//Route::get('/', [AuthController::class, 'PáginaInicial']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/signin', [AuthController::class, 'signin']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/dashboard', function(){
    $user = auth()->user();

    return 'olá' . $user->name;
})->middleware('auth');



Route::get('/personagens', [PersonagensController::class, 'index']);
Route::get('/personagens/create', [PersonagensController::class, 'create']);//mostrar
Route::post('/personagens/store', [PersonagensController::class, 'store']);
Route::get('/personagens/show/{product}', [PersonagensController::class, 'show']);
Route::get('/personagens/edit/{product}', [PersonagensController::class, 'edit']);
Route::post('/personagens/update/{product}', [PersonagensController::class, 'update']);
Route::get('/personagens/delete/{product}', [PersonagensController::class, 'destroy']);
Route::get('/personagens/hello/{name}', [PersonagensController::class, 'ola']);
Route::get('/personagens/dbz', [PersonagensController::class, 'dbz']);