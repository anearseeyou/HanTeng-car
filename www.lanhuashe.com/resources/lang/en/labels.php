<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => '全部',
        'yes' => '是',
        'no' => '否',
        'custom' => '自定义',
        'actions' => '操作',
        'buttons' => [
            'save' => '保存',
            'update' => '更新',
        ],
        'hide' => '隐藏',
        'none' => '无',
        'show' => '展示',
        'toggle_navigation' => '切换导航',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => '创建角色',
                'edit' => '编辑角色',
                'management' => '角色信息',

                'table' => [
                    'number_of_users' => '用户数',
                    'permissions' => '权限',
                    'role' => '角色',
                    'sort' => '排序',
                    'total' => '总数',
                ],
            ],

            'users' => [
                'active' => '管理',
                'all_permissions' => '所有权限',
                'change_password' => '修改密码',
                'change_password_for' => '修改 :user 的密码',
                'create' => '创建用户',
                'deactivated' => '停用用户',
                'deleted' => '删除用户',
                'edit' => '编辑用户',
                'management' => '用户信息',
                'no_permissions' => '没有权限',
                'no_roles' => '没有设置角色.',
                'permissions' => '权限',

                'table' => [
                    'confirmed' => '确认',
                    'created' => '创建',
                    'email' => '邮件',
					'tel' => '电话',
					'watch' => '微信号',
                    'id' => '微信用户OpenId',
                    'last_updated' => '最后更新与',
                    'name' => '姓名',
                    'no_deactivated' => '未停用',
                    'no_deleted' => '未删除',
                    'roles' => '角色',
                    'total' => '总数',
                    'img'   => '头像',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => '登录',
            'login_button' => '登录',
            'login_with' => '登录 :social_media',
            'register_box_title' => '注册',
            'register_button' => '注册',
            'remember_me' => '记住我 ！',
        ],

        'passwords' => [
            'forgot_password' => '忘记密码 ?',
            'reset_password_box_title' => '重置密码',
            'reset_password_button' => '重置密码',
            'send_password_reset_link_button' => '发送密码重置链接',
        ],

        'macros' => [
            'country' => [
                'alpha' => '国家',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => '时区',
        ],

        'user' => [
            'passwords' => [
                'change' => '修改密码',
            ],

            'profile' => [
                'avatar' => '头像',
                'created_at' => '创建于',
                'edit_information' => '编辑信息',
                'email' => '邮箱',
                'last_updated' => '最后更新',
                'name' => '名称',
                'update_information' => '更新信息',
            ],
        ],

    ],
];
