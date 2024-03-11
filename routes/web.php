<?php

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
//Index
Route::get('/','App\Http\Controllers\IndexController@index')->name('index');

//Route::get('/linkstorage', function () {
//    Artisan::call('storage:link');
//});

//Catalog filter
Route::get('/all','App\Http\Controllers\Frontend\Metrik\Catalog\CatalogController@index')->name('catalog.show');
//Sitemap
Route::get('/satemap.xml','App\Http\Controllers\Sitemap\SitemapController@index')->name('sitemap.index');
//video test
Route::get('/videofoto','App\Http\Controllers\VideoFoto@index');
//Metrik page
Route::group(['prefix'=>'/metrika'],function (){
   Route::get('/{url_metric}','App\Http\Controllers\Frontend\Metrik\IndexMetricController@index')->name('metrika.index');
});

//Tags page
Route::group(['prefix'=>'/tag'],function (){
    Route::get('/{url_tag}','App\Http\Controllers\Frontend\Tag\IndexTagController@index')->name('tag.index');
});

//Cabinet users for download metriks
Route::group(['prefix'=>'/cabinet','middleware'=>['cabinet','auth','verified']],function (){
    Route::get('/index','App\Http\Controllers\Cabinet\IndexCabinetController@index')->name('cabinet');
});

//Admin panel
Route::group(['prefix'=>'/adm_panel','middleware'=>['auth','admin']],function (){
    Route::get('/index','App\Http\Controllers\Admin\IndexAdminController@index')->name('admin');
    Route::get('/metrics_admin','App\Http\Controllers\Admin\MetricsAdminController@index')->name('metrics_admin.index');
    Route::get('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@index')->name('comments_admin.index');
    Route::get('/tags_admin','App\Http\Controllers\Admin\TagsAdminController@index')->name('tags_admin.index');
    Route::get('/users_admin','App\Http\Controllers\Admin\UsersAdminController@index')->name('users_admin.index');
    //Sitemap
    Route::get('/satemap-new','App\Http\Controllers\Sitemap\SitemapController@store')->name('sitemap.update');
});


//Route::get('/redactor','App\Http\Controllers\RedactorController@index')->name('index.redactor');

//Verification && Notification
Route::get('/logout','App\Http\Controllers\Auth\LogoutController')->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (\Illuminate\Http\Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Auth::routes(['verify'=>true]);




