<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

/*Route::get('/', function () {
    return view('welcome');
});

//Route::get('/string', [FirstController::class, 'string']);

Route::get('/index', function () {
    return view('first');
});

Route::match(['get', 'post'], '/welcome', function () {
    return '<h1>Welcome, user! The form has been successfully submitted.</h1>';
});

Route::post('/welcome', function () {
    return '<h3>Welcome, user! The form has been successfully submitted.</h3>';
});

Route::post('/success', [FirstController::class, 'getEmail'])->name('first.success');

Route::resource('try', PhotoController::class);

Route::get('article/{id}', [PhotoController::class, 'show'])->where('id', '[0-9]+');

Route::get('/welcome', function(){
    return view('success')
        ->with('name', 'Fiona')
        ->with('occupation', 'Developer');
});

Route::get('/welcome', function(){
    return view('success', ['name' => 'Kevin', 'occupation' => 'Accountant']);
});
*/

//Route for form
/*Route::get('/index', function () {
    return view('first');
});*/
//Pass data to blade
Route::get('/success', [FirstController::class, 'getData']);

Route::get('/index/{user}', [TaskController::class, 'index'])->name('index');

Route::get('/user', [UserController::class, 'user'])->name('user');

Route::post('/validate', [TaskController::class, 'validate'] )->name('user.validate');

Route::post('/insert', [TaskController::class, 'insert'] )->name('data.insert');

Route::post('/user/search', [UserController::class, 'search'] )->name('user.search');

//Route::post('/user/validate', [UserController::class, 'validate'] )->name('user.validate');

Route::get('/show/{task}', [TaskController::class, 'show'] )->name('data.show');

Route::post('/update/{task}', [TaskController::class, 'update'] )->name('data.update');

Route::get('/delete/{task}', [TaskController::class, 'delete'] )->name('data.delete');
