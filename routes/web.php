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

//configs route
Route::get('/configs/blockchain', function () {
    return view('configs.blockchain');
});

//accounts route
Route::get('/accounts', function () {
    return view('accounts.list');
});
Route::get('/accounts/create', function () {
    return view('accounts.create');
});

//data route
Route::get('/datas/onchain', function () {
    return view('datas.list_onchain');
});
Route::get('/datas/self', function () {
    return view('datas.list_self');
});
Route::get('/datas/create', function () {
    return view('datas.create');
});
Route::get('/datas/show', function () {
    return view('datas.show');
});
Route::get('/datas/show_onchain', function () {
    return view('datas.show_onchain');
});

//provides route
Route::get('/provides/onchain', function () {
    return view('provides.list_onchain');
});
Route::get('/provides/self', function () {
    return view('provides.list_self');
});
Route::get('/provides/search', function () {
    return view('provides.search');
});
Route::get('/provides/create', function () {
    return view('provides.create');
});

//requests route
Route::get('/requests/onchain', function () {
    return view('requests.list_onchain');
});
Route::get('/requests/self', function () {
    return view('requests.list_self');
});
Route::get('/requests/search', function () {
    return view('requests.search');
});
Route::get('/requests/create', function () {
    return view('requests.create');
});

//abouts route
Route::get('/abouts', function () {
    return view('abouts.help');
});

