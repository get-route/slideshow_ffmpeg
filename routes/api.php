<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Catalog and filters page for all metriks
Route::get('/all','App\Http\Controllers\Frontend\Metrik\Catalog\CatalogController@catalog')->name('catalog.all');
Route::get('/all/tag','App\Http\Controllers\Frontend\Metrik\Catalog\CatalogController@tags')->name('catalog.tags');
//Admin panels
Route::group(['prefix'=>'/adm_panel'],function (){
    Route::get('/index','App\Http\Controllers\Admin\IndexAdminController@index')->name('admin');
    Route::get('/metrics_admin','App\Http\Controllers\Admin\MetricsAdminController@index');
    Route::get('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@index');

    //----Tag Params----
    Route::post('/tags_admin','App\Http\Controllers\Admin\TagsAdminController@store');
    Route::get('/tags_admin','App\Http\Controllers\Admin\TagsAdminController@show');
    Route::patch('/tags_admin/{id}','App\Http\Controllers\Admin\TagsAdminController@update');
    Route::delete('/tags_admin/{id}','App\Http\Controllers\Admin\TagsAdminController@destroy');

    //----Comment Params----
    Route::get('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@show');
    Route::post('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@store');
    Route::patch('/comments_admin/{id}','App\Http\Controllers\Admin\CommentsAdminController@update');
    Route::patch('/comments_admin/public/{id}','App\Http\Controllers\Admin\CommentsAdminController@edit');
    Route::delete('/comments_admin/{id}','App\Http\Controllers\Admin\CommentsAdminController@destroy');

    //----Metrics Params----
    Route::post('/metrics_admin/add-image','App\Http\Controllers\Admin\MetricsAdminController@uploads');
    Route::post('/metrics_admin/create','App\Http\Controllers\Admin\MetricsAdminController@create');
    Route::patch('/metrics_admin/update/{id}','App\Http\Controllers\Admin\MetricsAdminController@update');
    Route::patch('/metrics_admin/ON/{id}','App\Http\Controllers\Admin\MetricsAdminController@onpublic');
    Route::get('/metrics_admin/edit/{id}','App\Http\Controllers\Admin\MetricsAdminController@edit');
    Route::get('/metrics_admin/delete-image/{image}','App\Http\Controllers\Admin\MetricsAdminController@dirdelete');
    Route::get('/metrics_admin','App\Http\Controllers\Admin\MetricsAdminController@show');
    Route::get('/metrics_admin/directive','App\Http\Controllers\Admin\MetricsAdminController@directive');
    Route::get('/metrics_admin/all-tags','App\Http\Controllers\Admin\MetricsAdminController@show_tags');
    Route::delete('/metrics_admin/delete/{id}','App\Http\Controllers\Admin\MetricsAdminController@destroy');

    //----Comments for posts of metriks----
    Route::get('/users_admin','App\Http\Controllers\Admin\UsersAdminController@show');
    Route::delete('/users_admin/delete/{id}','App\Http\Controllers\Admin\UsersAdminController@destroy');

});
//----Frontend success Metric User download for cabinet statistic (Storage)----
Route::post('/metrika/{propertyUrl}/userupload','App\Http\Controllers\Cabinet\UserMetrikController@uploads_cabinet')->name('cabinet.user');
//----Cabinet ready metrik for user----
Route::post('/cabinet/index/table','App\Http\Controllers\Cabinet\UserMetrikController@table_cabinet')->name('cabinet.table');
Route::post('/cabinet/index/table/stat','App\Http\Controllers\Cabinet\UserMetrikController@incr_stat')->name('cabinet.statistic');
Route::get('/cabinet/index/table/delete/{user}/{image}','App\Http\Controllers\Cabinet\UserMetrikController@destroy_metrik')->name('cabinet.deleteimg');
//----Comments for posts of metriks----
Route::post('/metric/add-comment','App\Http\Controllers\Frontend\Metrik\CommentsController@index')->name('metrik.comment');
Route::post('/metric/new-comment','App\Http\Controllers\Frontend\Metrik\CommentsController@index')->name('metrik.newcomment');
