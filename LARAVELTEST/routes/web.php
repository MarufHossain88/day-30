<?php

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
////
////Route::get('/', function () {
////    return view('welcome');
////});
//
//
////route::get('/','StudentController@index');
//
//
////route::get('/basis/bitm',function (){
////    return 'Hello BITM';
////});
//
//
//
//route::get('/',[
//    'uses' => 'StudentController@index',
//    'as' => '/'
//]);
//
//
//route::get('/about',[
//    'uses' => 'StudentController@add',
//    'as' => '/about'
//]);











route::get('/', [
    'uses' =>'NewShopController@index',
    'as' =>'/'
]);


route::get('/category-product', [
    'uses' =>'NewShopController@categoryProduct',
    'as' =>'category-product'
]);


route::get('/mailUs', [
    'uses' =>'NewShopController@mailUs',
    'as' =>'mailUs'
]);


route::get('/Category/add', [
    'uses' =>'CategoryController@index',
    'as' =>'add-Category'
]);


route::post('/Category/save', [
    'uses' =>'CategoryController@saveCategoryInfo',
    'as' =>'new-category'
]);



route::get('/category/manage', [
    'uses' =>'CategoryController@manageCategoryInfo',
    'as' =>'manage-category'
]);



route::get('/category/unpublished/{id}', [
    'uses' =>'CategoryController@unpublishedCategoryInfo',
    'as' =>'unpublished-category'
]);



route::get('/category/published/{id}', [
    'uses' =>'CategoryController@publishedCategoryInfo',
    'as' =>'published-category'
]);



route::get('/category/edit/{id}', [
    'uses' =>'CategoryController@editCategoryInfo',
    'as' =>'edit-category'
]);



route::post('/category/update', [
    'uses' =>'CategoryController@updateCategoryInfo',
    'as' =>'update-category'
]);



route::get('/category/delete/{id}', [
    'uses' =>'CategoryController@deleteCategoryInfo',
    'as' =>'delete-category'
]);








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
