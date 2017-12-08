<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => '用户管理',

            'roles' => [
                'all' => '所有角色',
                'create' => '创建角色',
                'edit' => '编辑角色',
                'management' => '角色信息',
                'main' => '角色',
            ],

            'users' => [
                'all' => '所有用户',
                'change-password' => '修改密码',
                'create' => '创建用户',
                'deactivated' => '停用用户',
                'deleted' => '删除用户',
                'edit' => '编辑用户',
                'main' => '用户',
            ],
        ],

		'reward' => [
			'title' => '大转盘设定',
		],

		'log' => [
			'title' => '统计信息',
		],

        'log-viewer' => [
            'main' => '日志相关',
            'dashboard' => '简介',
            'logs' => '日志',
        ],

        'sidebar' => [
            'dashboard' => '简介',
            'general' => '一般',
        ],
    ],

    'language-picker' => [
        'language' => '语言',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'da' => 'Danish',
            'de' => 'German',
            'en' => 'English',
            'es' => 'Spanish',
            'fr' => 'French',
            'it' => 'Italian',
            'pt-BR' => 'Brazilian Portuguese',
            'sv' => 'Swedish',
            'th' => 'Thai',
        ],
    ],
];
