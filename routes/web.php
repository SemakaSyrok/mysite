<?php

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Frontend\Helper;


Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/contact', function (Request $request) {

    $request->session()->flash('contact_message', Helper::getMessage($request->input('mess')));

    return view('contact');

})->name('contact');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::post('/message', 'StoreMessage')->name('message');



Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {


    Route::get('logout', 'Auth\LogoutController')->name('logout');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('login', 'Auth\LoginController@login');


    Route::group(['middleware' => ['web', 'auth']], function () {

        Route::resources(['messages' => 'MessageController']);

    });



});

//Auth::routes();
