<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists' => '角色已经存在.',
                'cant_delete_admin' => '您没有此权限.',
                'create_error' => '创建出错，请重试.',
                'delete_error' => '删除出错，请重试.',
                'has_users' => '角色下存在用户，无法删除.',
                'needs_permission' => '至少选择一个权限为此角色.',
                'not_found' => '角色不存在.',
                'update_error' => '更新角色出错，请重试.',
            ],

            'users' => [
                'cant_deactivate_self' => '不允许自己操作此项.',
                'cant_delete_self' => '不能删除您自己.',
                'create_error' => '创建用户时出现错误，请重试.',
                'delete_error' => '删除用户出错，请重试.',
                'email_error' => '邮件已经存在.',
                'mark_error' => '更新用户出错，请重试.',
                'not_found' => '用户不存在.',
                'restore_error' => '恢复出错，请重试.',
                'role_needed_create' => '创建成功，但处于停用状态，请选择一个角色.',
                'role_needed' => '您至少选择一个角色.',
                'update_error' => '更新出错，请重试！',
                'update_password_error' => '修改密码出现错误，请重试！',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => '您的帐户已经被确认.',
                'confirm' => '确认你的账户!',
                'created_confirm' => '账户创建成功，我们已经发送一封确认邮件到您的邮箱.',
                'mismatch' => '您的确认代码不匹配.',
                'not_found' => '确认代码不存在.',
                'resend' => '您的帐户没有被确认. 请点击确认链接, 或者 <a href="' . route('account.confirm.resend', ':user_id') . '">点击这里</a> 重新发送确认邮件.',
                'success' => '您的帐户确认成功!',
                'resent' => '新确认邮件已经发送.',
            ],

            'deactivated' => '您的账户已经被停用.',
            'email_taken' => '邮件已经注册过.',

            'password' => [
                'change_mismatch' => '旧密码错误.',
            ],
        ],
    ],
];
