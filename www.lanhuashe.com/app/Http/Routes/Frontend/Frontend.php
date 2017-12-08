<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('/test', 'FrontendController@test')->name('frontend.test');

Route::get('ask/index', 'FrontendController@ask')->name('frontend.ask');

Route::get('reward/{num}/{sec}/{id}', 'FrontendController@reward')->name('frontend.reward');

Route::get('query/{num}/{sec}/{id}', 'FrontendController@query')->name('frontend.query');

Route::get('tick/', 'FrontendController@query_tick')->name('frontend.query_tick');
/*tickclick*/
/*Route::get('tickclick/', 'FrontendController@click_tick')->name('frontend.click_tick');

Route::get('rewarded/{num}/{openid}', 'FrontendController@rewarded')->name('frontend.rewarded');

Route::post('end/', 'FrontendController@end')->name('frontend.end');

Route::any('/wechat', 'WechatController@serve');*/

/**
 * These frontend controllers require the user to be logged in
 */
/*Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });
});*/
