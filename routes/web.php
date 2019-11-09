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



Route::get('/', 'SiteController@index')->name('main');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::get('/skills', 'SiteController@skills')->name('skills');
Route::get('/projects', 'SiteController@projects')->name('projects');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vms', 'SiteController@vms')->name('vms');

//Route::get('/mail', function() {
//    return view('mail.dino', [
//        'name' => "Simon"
//    ]);
//});

Route::post('/message', 'StoreMessage')->name('message');
Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

    Route::get('/group-of-clients/send-mails/{id}', 'MailController@sendGroups')
        ->name('voyager.group-of-clients.send-mails');

});


Route::group(['middleware' => 'auth', 'prefix' => 'api'], function () {

    Route::get('/client-groups/{id}', 'ClientGroupsController@view');

});
