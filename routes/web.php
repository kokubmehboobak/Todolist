<?php
use App\Http\Controllers\todolistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authenticationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'auth'], function () {
Route::get('/members', function () {
    return view('members');
});
});
Route::group(['middleware' => 'auth'], function () {
Route::get('/addtask', [todolistController::class, 'addtask'])->name('newtask.add');
});
Route::group(['middleware' => 'auth'], function () {
Route::post('/addtask', [todolistController::class, 'addnewtask']);
});
Route::group(['middleware' => 'auth'], function () {
Route::get('/viewtask', [todolistController::class, 'viewtask']);
});
Route::group(['middleware' => 'auth'], function () {
Route::get('/edittask/{id}', [todolistController::class, 'edittask'])->name('edittask.show');
});
Route::group(['middleware' => 'auth'], function () {
Route::PUT('/edittask/{id}', [todolistController::class,'edit'])->name('edittask.edit');
});
Route::group(['middleware' => 'auth'], function () {
Route::get('/deletetask/{id}',[todolistController::class,'deletetask'])->name('deletetask.show');
});


Route::get('/', [authenticationController::class, 'loginpage'])->name('login');


Route::post('/', [authenticationController::class, 'login']);


Route::get('/register',[authenticationController::class, 'signuppage'])->name('register');

Route::post('/register',[authenticationController::class, 'signup']);

Route::get('/logout', [authenticationController::class, 'logout']);
