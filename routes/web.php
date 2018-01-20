<?php
use Illuminate\Auth\Middleware\Authenticate;
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

Route::get('test', 'AjaxController@test');

Route::get('/', 'MainController@index');

//Ajax
Route::group(['middleware' => ['web']], function () {
    Route::post('trylogin', 'AjaxController@login');
    Route::post('loginTest', 'AjaxController@loginTest');
});

Route::group(['middleware'=>['auth']],function(){
    Route::get('WhoWeAre', 'PageController@WhoWeAre');
    Route::get('OurStory', 'PageController@OurStory');
    Route::get('Team', 'PageController@Team');
    Route::get('Execution', 'PageController@Execution');
    Route::get('Advisory', 'PageController@Advisory');
    Route::get('Descretery', 'PageController@Descretery');
    Route::get('Trading', 'PageController@Trading');
    Route::get('Financing', 'PageController@Financing');
    Route::get('WhyFortross', 'PageController@WhyFortross');
    Route::get('OurProcesses', 'PageController@OurProcesses');
    Route::get('OurPhilosophy', 'PageController@OurPhilosophy');
    Route::get('RiskManagement', 'PageController@RiskManagement');
    Route::get('Contacts', 'PageController@Contacts');
});


Route::get('login', 'MainController@index')->name('login');

//Route::group(['prefix'=>'admin', 'middleware' => ['admin','auth']],   function() {
Route::group(['middleware' => ['admin','auth']],   function() {
    //только для админа
    Route::get('admin/users', 'PageController@users');
	Route::post('admin/adduser', 'AjaxController@adduser');
	Route::post('admin/deleteuser', 'AjaxController@deleteuser');
});


