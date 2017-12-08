<?php

/*记录用户回答次数*/
Route::any('/wechatabout/answernum/{openid}', 'WechataboutController@answernum');

/*标识用户回答正确*/
Route::any('/wechatabout/answerright/{openid}', 'WechataboutController@answerright');

/*标识用户回答正确*/
Route::get('/wechatabout/getanswerright/{openid}', 'WechataboutController@getanswerright');

/*更新领奖信息*/
Route::any('/wechatabout/updateinfo/{truename?}/{tel?}/{wechat?}/{addr?}/{reward?}/{openid}/{sec}', 'WechataboutController@updateinfo');

Route::any('/wechatabout/updateinfopost/{openid}/{reward}', 'WechataboutController@updateinfopost');

/*获取中奖信息*/
Route::get('/wechatabout/getuserinfo/{openid}', 'WechataboutController@getuserinfo');

/*用户分享记录*/
Route::get('/wechatabout/share/{userid}','WechataboutController@share');

/*大转盘*/
Route::any('/rewardabout/set/{openid}', 'RewardaboutController@set');

Route::any('/rewardabout/get/{id}/{type}', 'RewardaboutController@get');

/**/
Route::any('/rewardabout/rand/', 'RewardaboutController@rand');

Route::any('/rewardabout/can/{wid}', 'RewardaboutController@can');

