<?php

/**
 * 微信用户列表
 */
Route::group([
	/*前缀为wechatuser*/
	'prefix'     => 'wechatuser',
], function() {
	/*微信公众号关注列表*/
	Route::get('/','WechatUserController@index')->name('admin.wechatuser');
	Route::get('/active','WechatUserController@active')->name('admin.wechatuser.active');
	Route::get('/share/{userid}','WechatUserController@share')->name('admin.wechatshare');
	Route::get('/insertuser/{truename}/{tel}/{wechat}/{addr}/{reward}/{openid}','WechatUserController@insertuser')->name('admin.insertuser');
});
