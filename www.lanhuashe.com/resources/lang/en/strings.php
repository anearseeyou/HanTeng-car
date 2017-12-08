<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => '您确定要永久删除此用户吗？在应用程序中引用该用户的身份证的任何地方都将有可能出现错误.',
                'if_confirmed_off' => '(如果确认是关闭的)',
                'restore_user_confirm' => '将还原到原始状态?',
            ],
        ],

        'dashboard' => [
            'title' => '简介',
            'welcome' => '欢迎',
        ],

		'reward' => [
			'title' => '大转盘设定',
			'welcome' => '',
		],

        'general' => [
            'all_rights_reserved' => 'All Rights Reserved.',
            'are_you_sure' => '您确定吗?',
            'boilerplate_link' => '汉腾',
            'continue' => '继续',
            'member_since' => '会员自',
            'minutes' => ' 分钟',
            'search_placeholder' => '搜索...',
            'timeout' => '由于您没有操作，已自动安全退出 ',

            'see_all' => [
                'messages' => '查看所有',
                'notifications' => '查看所有',
                'tasks' => '查看所有',
            ],

            'status' => [
                'online' => '在线',
                'offline' => '下线',
            ],

            'you_have' => [
                'messages' => '{0} 没有消息|{1} 您有一条消息|[2,Inf] 您有 :number 条消息',
                'notifications' => '{0} 没有通知|{1} 您有一条通知|[2,Inf] 您有 :number 条通知',
                'tasks' => '{0} 没有任务|{1} 您有一个任务|[2,Inf] 您有 :number 个任务',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => '您的密码重置链接',
            'reset_password' => '点击重置密码',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => '点击这里确认你的 account:',
        ],

        'test' => '测试',

        'tests' => [
            'based_on' => [
                'permission' => '权限基于 - ',
                'role' => '角色基于 - ',
            ],

            'js_injected_from_controller' => 'javascript注入控制器',

            'using_blade_extensions' => '应用模板继承',

            'using_access_helper' => [
                'array_permissions' => '使用权限名称或身份证的数组的访问助手，用户必须拥有所有.',
                'array_permissions_not' => '使用权限名称或身份证的数组的访问助手，用户不必拥有所有.',
                'array_roles' => '使用角色名或身份证的数组的访问助手，用户必须拥有所有.',
                'array_roles_not' => '使用角色名或身份证的数组的访问助手，用户不必拥有所有.',
                'permission_id' => '使用权限ID的',
                'permission_name' => '使用权限名称的访问助手',
                'role_id' => '使用角色ID的访问助手',
                'role_name' => '使用访问助手基于角色名',
            ],

            'view_console_it_works' => '查看 console, 你能看到 \'it works!\' 此数据来自 FrontendController@index',
            'you_can_see_because' => '你能看到是因为你是 \':role\' 角色!',
            'you_can_see_because_permission' => '您能看到是因为您有 \':permission\' 权限!',
        ],

        'user' => [
            'profile_updated' => '简介更新成功.',
            'password_updated' => '密码更新成功.',
        ],

        'welcome_to' => '欢迎来到 :place',
    ],
];