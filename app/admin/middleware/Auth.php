<?php

namespace app\admin\middleware;

class Auth
{
    public function handle($request, \Closure $next)
    {
        // 当前URL
        $current_url = $request->url();
        
        d($request,$current_url,pathinfo($current_url));

        // 当前User
        $current_user = [
            'role' => ['admin','user']
        ];
        // 当前用户是超级管理员
        $current_user['role'] = 'superAdmin';

        // 访问的类型
        $current_method = $request->method();

        // 角色的规则数据 - 请求类型分类
        $rules = [
            'GET' => ['action/con1'],
            'POST' => ['action/con1'],
        ];

        // 不需要验证的白名单
        $url_white_list = [
            'admin/login'
        ];

        // 白名单合并
        $current_user = array_merge($current_user,$rules[$current_method]);

        // 验证
        // if( in_array( $current_url, $url_white_list ) ){}

        return $next($request);
    }
}
