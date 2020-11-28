<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitesController;

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

//tutaj jest odnisienie do  naszej strony startowej Laravel naszego views->pliku welcome.blade.php
// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/sites', 'SitesController@index'); //wskazujemy na metode która ma sie wykonać podczas tej akcji czyli index
//Strona glowna
Route::get('/', [SitesController::class, 'index'])->name('sites.index');

Route::get('/add', [SitesController::class, 'add'])->name('sites.add');

//post bo formuarz będzie wywoływana metoda post
// Route::post('/save', [
//     'uses' => 'SitesController@save',
//     'as' => 'sites.save' //ustalanie URL
// ]);

// Route::post('/save', [
//          'uses' => [SitesController::class, 'save'],
//          'as' => 'sites.save' //ustalanie URL
//      ]);

Route::post('/save', [SitesController::class, 'save'])->name('sites.save');

//Route::post('/sites/{site}', [SitesController::class, 'save'])->name('sites.save');

Route::get('/site/{site}', [SitesController::class, 'show'])->name('sites.show');//{site}jest to parametr w adresie URL

Route::get('/sites/edit/{site}', [SitesController::class, 'edit'])->name('sites.edit');

Route::post('/sites/{site}', [SitesController::class, 'update'])->name('sites.update');

Route::get('/sites/{site}', [SitesController::class, 'delete'])->name('sites.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
