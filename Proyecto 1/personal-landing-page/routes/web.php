<?php
use App\Http\Controllers\PaginaController;
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
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact/{fill_id?}',[PaginaController::class, 'fillForm']); {
    //return view('about');
}



/*Route::get('/index/fill', function () {
    return view('index');
});*/
