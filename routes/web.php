<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\layerController;
use App\Http\Controllers\deviceController;
use App\Http\Controllers\connectionController;

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

Route::get('/', [\App\Http\Controllers\DataController::class, 'index']);
Route::resource('layer', layerController::class);
/*
Route::resources([
	'layer' 	=> layerController::class,
	'device'	=> deviceController::class,
	'connection'	=> connectionController::class,
]);
 */
Route::get('welcome', function () {
       	return view('welcome');
});

