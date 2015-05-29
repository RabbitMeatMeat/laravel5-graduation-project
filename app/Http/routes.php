<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/help', 'HomeController@help');
/*
 * Article
 */
Route::resource('articles', 'ArticlesController');
Route::get('articles/show/auth', 'ArticlesController@showAuth');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles/store', 'ArticlesController@store');

Route::get('pages/{id}', 'PagesController@show');
Route::post('comment/store', 'CommentsController@store');


/*
 * 隐式控制器
 * 详见：http://www.golaravel.com/laravel/docs/5.0/controllers/
 *
 */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

/*
 * 关于middleware中间件
 * 简介：过滤HTTP请求
 * 例如：例如，Laravel 默认包含了一个中间件来检验用户身份验证，
 *      如果用户没有经过身份验证，中间件会将用户导向登录页面，然而，如果用户通过身份验证，中间件将会允许这个请求进一步继续前进。
 * 详见：http://www.golaravel.com/laravel/docs/5.0/middleware/
 * 要在Kernel.php内注册
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'],
    function () {
        Route::get('/', 'AdminHomeController@index');

        /*
         * 该单一路由声明定义了很多路由
         * Route::get('/pages', 'PagesController@index');
         * Route::get('/pages/create', 'PagesController@create');
         * Route::get('/pages/{pages}/edit', 'PagesController@edit');
         * 等等
         * 详见：http://laravel-china.org/docs/5.0/controllers#restful-resource-controllers
         * */
        Route::resource('pages', 'PagesController');

        Route::resource('comments', 'CommentsController');

    });

