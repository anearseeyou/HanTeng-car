<?php
Route::any('gongzuoshijianqianduanhuashiza8610/', 'WechatPayController@index');
Route::any('gongzuoshijianqianduanhuashis/', 'WechatPayController@mini');

Route::any('gongzuoshijianqianduanhuashi/bskl', 'WechatPayController@bskl');

Route::any('gongzuoshijianqianduanhuashi/wy1', 'WechatPayController@wy1');
Route::any('gongzuoshijianqianduanhuashi/wy2', 'WechatPayController@wy2');
Route::any('gongzuoshijianqianduanhuashi/wy3', 'WechatPayController@wy3');
Route::any('gongzuoshijianqianduanhuashi/wy4', 'WechatPayController@wy4');
Route::any('gongzuoshijianqianduanhuashi/wy9', 'WechatPayController@wy9');
Route::any('gongzuoshijianqianduanhuashi/asdy', 'WechatPayController@asdy');
Route::any('gongzuoshijianqianduanhuashi/wda', 'WechatPayController@wda');

Route::any('gongzuoshijianqianduanhuashi/wbkx', 'WechatPayController@wbkx');

Route::any('gongzuoshijianqianduanhuashi/yibao', 'WechatPayController@yibao');

Route::any('gongzuoshijianqianduanhuashi/xuanmai', 'WechatPayController@xuanmai');

//Route::any('wechatcard/', 'WechatPayController@card');

Route::post('wechat/creatqrcode', 'WechatPayController@creat_qrcode');

Route::post('wechat/creatticket', 'WechatPayController@creat_ticket');
