<?php

Route::group(['middleware' => ['web','wechat.oauth']], function() {
    /**
     * 语言切换
     */
    Route::group(['namespace' => 'Language'], function () {
        require (__DIR__ . '/Routes/Language/Language.php');
    });

    /**
     * 前端路由
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Frontend'], function () {
        require (__DIR__ . '/Routes/Frontend/Frontend.php');
        require (__DIR__ . '/Routes/Frontend/Access.php');
    });
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    /**
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    //require (__DIR__ . '/Routes/Backend/Dashboard.php');
    //require (__DIR__ . '/Routes/Backend/Access.php');
    //require (__DIR__ . '/Routes/Backend/LogViewer.php');
    //require (__DIR__ . '/Routes/Backend/Log.php');
    //require (__DIR__ . '/Routes/Backend/Reward.php');
    //require (__DIR__ . '/Routes/Backend/WechatUser.php');
});
/* wechat api*/
Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    /*授权路由*/
    //require (__DIR__ . '/Routes/Backend/Wechat.php');
   // require (__DIR__ . '/Routes/Backend/Wechatabout.php');
    //require (__DIR__ . '/Routes/Backend/Wechatpay.php');
});

/*test wx api*/
Route::group(['namespace' => 'Backend'], function () {
    //授权路由
   // require (__DIR__ . '/Routes/Backend/Wechatpay.php');
});
