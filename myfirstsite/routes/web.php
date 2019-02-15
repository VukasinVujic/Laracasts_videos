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

// Route::get('/', function () {
    // $tasks = [
    //     'Go to the store',
    //     'Go to the market',
    //    'Go to the work',
    //    'Go to the concert'

    // ];
    // return view('welcome', [  // ********1 nacin returna**********
    //     'tasks' => $tasks,
    //      'foor' => request('title')    
    //     ]);

    // return view('welcome')->withTasks($tasks)->withFoo('foo'); // ********2 nacin returna**********
                                                                                    
    // return view('welcome')->with([ // ********3 nacin returna**********
    //     'foo' => 'bar',            // ******* nije potreban gore $tasks     
    //     'tasks' => ['some tasks']
    // ]);

    // return view('welcome', [ // ***** VIDEO 6 **** prebaceno u PagesController
    //     'foo' => 'bar'       // i time je ova cela ruta suvisna
    // ]);
// });


Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');


// Route::get('/contact', function () { // ***** VIDEO 6 **** prebaceno u PagesController
//     return view('contact');             // i time je ova cela ruta suvisna

// });



// Route::get('/about', function () {
//     return view('about');
// });