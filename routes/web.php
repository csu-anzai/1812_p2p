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
//当前域名首页
Route::get('',function(){return view('sign');});
//app H5 后台
Route::middleware([])->namespace('Admin')->group(function(){
	Route::prefix('admin')->group(function(){
		//首页-后台
		Route::get('','IndexController@index');
		Route::get('index','IndexController@echo');
	});
	Route::prefix('cate')->group(function(){
		//分类
		Route::get('create','CateController@create');
		Route::post('store','CateController@store');
		Route::get('show','CateController@show');
	});
	Route::prefix('type')->group(function(){
		//类型
		Route::get('create','TypeController@create');
		Route::post('store','TypeController@store');
		Route::get('show','TypeController@show');
	});
	Route::prefix('attribute')->group(function(){
		//属性
		Route::any('create','AttributeController@create');
		Route::any('store','AttributeController@store');
		Route::any('show','AttributeController@show');
		Route::any('delete','AttributeController@delete');
	});
	Route::prefix('goods')->group(function(){
		//商品
		Route::any('create','GoodsController@create');
		Route::any('store','GoodsController@store');
		Route::any('show','GoodsController@show');
		Route::any('stock/{goods_id}','GoodsController@stock');//进货
		Route::any('stock_do','GoodsController@stock_do');//货品入库
		Route::any('change','GoodsController@change');//即点即改
	});
});
//前台
Route::middleware([])->namespace('index')->group(function(){
	Route::prefix('index')->group(function(){						
		Route::prefix('index')->group(function(){
			Route::any('index','IndexController@index');//前台首页
		});
	});
});
