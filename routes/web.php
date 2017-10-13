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
use Troquer\Skill;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


// スタッフ用画面
Route::get('/staff', 'SkillsController@index');

Route::post('/registerSkills','SkillsController@register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Facebook Authentification
Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
