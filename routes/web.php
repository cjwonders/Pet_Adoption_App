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

/*

Hey!! Thanks for reviewing my project :D

Here's how I acheived all the criterias:

1. CSS, JS, and favicon used. Files in the resources folder.

2. Routes created! One controller used for routing which has three functions returning the correct view. The controller is AppController.php file.

3. The three views created. 

4. Head, nav and footer created.

5. They use @include :D

*/

Route::get('/', 'AppController@index');

Route::get('/dogs', 'AppController@dogs');

Route::get('/cats', 'AppController@cats');

