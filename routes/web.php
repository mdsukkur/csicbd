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

Route::get('/', 'WebsiteViewCtrl@index');
Route::get('/MyAccount', 'WebsiteViewCtrl@myaccount')->name('myaccount')->middleware('auth');
Route::get('/About', 'WebsiteViewCtrl@about')->name('about');
Route::get('/Contact', 'WebsiteViewCtrl@contact')->name('contact');
Route::get('/term&condition', 'WebsiteViewCtrl@term')->name('term&condition');

Route::post('numberCheck', 'UserController@numberCheck');


/* Admin Section */

Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('loginadmin');


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', 'AdminViewCtrl@index')->name('admin.home');
    Route::get('userManagement', 'AdminViewCtrl@userManagement')->name('admin.usermanagement');
    Route::get('questionManagement', 'AdminViewCtrl@questionManagement')->name('admin.questionmanagement');
    Route::get('complainManagement', 'AdminViewCtrl@complainManagement')->name('admin.complainmanagement');
    Route::get('userDetails/{id}', 'AdminViewCtrl@userDetails')->name('admin.userdetails');
    Route::get('setting', 'AdminViewCtrl@setting')->name('admin.setting');

    /* Company Details */
    Route::resource('company', 'CompanyController');

    /* Category Details */
    Route::resource('category', 'CategoryController');

    /* Slider */
    Route::resource('slider', 'SliderController');

    /* Aboutus Controller */
    Route::resource('aboutus', 'AboutusController');

    /* Aboutus Controller */
    Route::resource('general', 'GeneralController');

    /* Office Address Controller */
    Route::resource('officeAddress', 'OfficeAddressController');

    /* Admin Controller */
    Route::resource('admins', 'AdminController');

    /* Question Cancel */
    Route::post('question/cancel/{id}', 'QuestionController@cancel')->name('question.cancel');

    /* Privacy Controller */
    Route::resource('term_service', 'PrivacyController');
});


Route::group([/*'middleware' => 'auth',*/
    'guard' => ['admin|web']], function () {

    /* Question Controler */
    Route::resource('question', 'QuestionController');

    /* Contact Us Controler */
    Route::resource('contactus', 'ContactusController');

    /* Complain Controller */
    Route::resource('complain', 'ComplainController');

    /* Normal User */
    Route::post('editInfo', 'UserController@editInfo');
    Route::post('passwordMatch', 'UserController@passwordMatch');
    Route::post('changePass', 'UserController@changePass');
});


Auth::routes();


View::composer('*', function ($view) {
    $general = \App\General::all()->last();
    $view->with('general', $general);

    $aboutus = \App\Aboutus::all()->first();
    $view->with('aboutus', $aboutus);

    $term = \App\Privacy::all()->first();
    $view->with('term', $term);
});