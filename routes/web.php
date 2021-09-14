
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

Route::get('/', function () {
    return view('index');
});


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

Route::get('/cv', function () {
    return view('cv');
});

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

Route::get('/projecten', function () {
    return view('projecten');
});

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

Route::get('/contact', function () {
    return view('contact');
});

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

Route::get('/overmij', function () {
    return view('overmij');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/contactform', function () {
    return view('contactform');
});

Route::get('/blog', function () {
    return view('blog');
});

route::get('/whosebirthday', 'WhosebirthdayController@birthday');

route::get('/deAlienize', 'deAlienizeController@showDeAlienizedText');

Route::get('/deAlienize', function () {
    return view('deAlienize');
});

Route::get('/guesnumber/', 'GuesNumberController@startGame');
Route::post('/guesnumber/', 'GuesNumberController@Shownumber');
Route::post('/startGame/', 'GuesNumberController@startGame');
Route::post('/startGame/', 'GuesNumberController@startGame');

Route::get('/cv-en', function () {
    return view('cv-en');
});

Route::get('/en', function () {
    return view('index-en');
});

Route::get('/contact-en', function () {
    return view('contact-en');
});

Route::get('/blog-en', function () {
    return view('blog-en');
});

Route::get('/overmij-en', function () {
    return view('overmij-en');
});

Route::get('/projecten-en', function () {
    return view('projecten-en');
});
