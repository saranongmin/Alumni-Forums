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
Route::get('/', 'FrontendController@welcome')->name('welcome');
Route::get('/blogs', 'FrontendController@blog')->name('blogs');
Route::get('/blog-details/{blog}/', 'FrontendController@blogDetails')->name('blog.details');
Route::get('/blogs/{category}/{subCategory?}', 'FrontendController@blogs')->name('blogs.list');

Route::get('/events', 'FrontendController@event')->name('events');
Route::get('/event-details/{event}/', 'FrontendController@eventDetails')->name('event.details');

Route::get('/jobs','FrontendController@job')->name('jobs');


Route::get('/reports','FrontendController@reports')->name('reports');
Route::get('/blog-single', function () {
    return view('frontend.blog-single');
})->name('blog-single');

Route::get('/gallery', function () {
    return view('frontend/gallery');
})->name('gallery');

Route::get('/garo', function () {
    return view('frontend/garo');
})->name('garo');
Route::get('/garo-culture', function () {
    return view('frontend/garo-culture');
})->name('garo-culture');
Route::get('/garo-festivals', function () {
    return view('frontend/garo-festivals');
})->name('garo-festivals');
Route::get('/garo-profession', function () {
    return view('frontend/garo-profession');
})->name('garo-profession');


Route::get('/event-details', function () {
    return view('frontend/event-details');
})->name('event-details');

Route::get('/contact', function () {
    return view('frontend/contact');
})->name('contact');

Route::get('/jobapplies', function () {
    return view('frontend/jobapplies');
})->name('jobapplies');

Route::get('/uploadcv', function () {
    return view('frontend/uploadcv');
})->name('uploadcv');
Route::get('/alumni', function () {
    return view('frontend/alumni');
})->name('alumni');
Route::get('/alumni-details', function () {
    return view('frontend/alumni-details');
})->name('alumni-details');

Route::resource('/resumes', 'ResumeController');
Route::resource('/customs','CustomController');
Route::resource('aprofiles', 'AprofileController');


Route::resource('/tests','TestController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
Route::get('/', function (){
    return view('backend.dashboard');
    })->name('home');
   Route::get('/my-profile', 'UserController@myProfile')->name('my_profile');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/users/{id}', 'UserController@update')->name('users.update');
Route::get('/profile/{id}/edit', 'UserprofileController@edit')->name('profile.edit');
    Route::put('/profile/{id}', 'UserprofileController@update')->name('profile.update');


 Route::get('/profiles/pdf', 'PdfController@profiles')->name('profiles.pdf');

     Route::get('/profiles/excel', 'ExcelController@profiles')->name('profiles.excel');
 Route::get('/profiles/trash', 'ProfileController@trash')->name('profiles.trash');
    Route::get('/profiles/trash/{id}', 'ProfileController@showTrash')->name('profiles.show_trash');
    Route::put('/profiles/trash/{id}', 'ProfileController@restoreTrash')->name('profiles.restore_trash');
    Route::delete('/profiles/trash/{id}', 'ProfileController@deleteTrash')->name('profiles.delete_trash');
Route::resource('profiles', 'ProfileController');

Route::resource('/users','UserController');



     route::resource('/reports','ReportController');

     route::resource('/events','EventController');
      Route::get('/blogs/pdf', 'PdfController@blogs')->name('blogs.pdf');

     route::resource('/blogs','BlogController');

Route::resource('categories', 'CategoryController');
    Route::resource('sub-categories', 'SubCategoryController');
Route::post('blogs/{blog}/comment', 'CommentController@blogComment')->name('blogs.comment');
    Route::get('blogs/{blog}/notification/{notificationId}', 'BlogController@show')->name('blogs.notification');

     route::resource('garos','GaroController');


Route::get('/jobs/trash', 'JobsController@trash')->name('jobs.trash');
    Route::get('/jobs/trash/{id}', 'JobsController@showTrash')->name('jobs.show_trash');
    Route::put('/jobs/trash/{id}', 'JobsController@restoreTrash')->name('jobs.restore_trash');
    Route::delete('/jobs/trash/{id}', 'JobsController@deleteTrash')->name('jobs.delete_trash');
     route::resource('jobs','JobsController');

     route::resource('users','UserController');
    Route::resource('tags', 'TagController');
    Route::resource('jobcategories', 'JobcategoryController');
    Route::resource('job-subcategories', 'JobSubcategoryController');



});