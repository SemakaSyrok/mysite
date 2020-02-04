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
//Route::get('/vms/source', 'SiteController@source')->name('source');

Route::get('/vms/pay', 'SiteController@pay')->name('pay');
Route::get('/vms/faq', 'SiteController@faq')->name('faq');

Route::get('/set-email', 'ApiController@setEmail')->name('set-email');
Route::post('/message', 'StoreMessage')->name('message')->middleware(['ip']);

Route::group(['prefix' => 'admin', ], function () {

    Voyager::routes();

    Route::get('/group-of-clients/send-mails/{id}', 'MailController@sendGroups')
        ->name('voyager.group-of-clients.send-mails');

});


Route::group(['middleware' => 'auth', 'prefix' => 'api'], function () {

    Route::get('/client-groups/{id}', 'ClientGroupsController@view');

});
