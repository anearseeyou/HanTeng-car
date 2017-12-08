<?php

Route::get('reward', 'RewardController@index')->name('admin.reward');
Route::get('reward/creat', 'RewardController@creat')->name('admin.reward.creat');
Route::post('reward/addcreat', 'RewardController@addcreat')->name('admin.reward.addcreat');
Route::get('reward/edit/{id}', 'RewardController@edit')->name('admin.reward.edit');
Route::post('reward/addedit', 'RewardController@addedit')->name('admin.reward.addedit');
Route::get('reward/dele/{id}', 'RewardController@dele')->name('admin.reward.dele');