<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
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

/*
 * Use livewire route method to return a livewire route component
 *
 * See: https://laravel-livewire.com/docs/rendering-components#route-registration
 *
 */


Route::layout('app')->middleware('auth')->section('content')->group(function (Router $router) {

    $router->livewire('/', 'application')->name('home');
    $router->livewire('/users', 'users.index')->name('users.index');
    $router->livewire('/users/create', 'users.create')->name('users.create');
    $router->livewire('/users/{user}', 'users.edit')->name('users.edit');

});

Route::layout('guest')->middleware('guest')->section('content')->group(function (Router $router) {

    $router->livewire('/login', 'auth.login')->name('login');
    $router->livewire('/register', 'auth.register')->name('register.create');

});
