<?php
/**
 * 1. 验证登录ID后将UUID写入Session;
 * 
 */
namespace app\admin\model;

use think\facade\Db;
use think\facade\Session;

class Auth
{
    // login verify
    public function verifyLogin( string $mail, string $password, string $type = 'mail' )
    {
        // 验证用户

        // 
        Session::set('user.token','token');
        return true;
    }

    // is login
    public function isLogin( string $user_token = null ):boolval
    {
        if( empty($user_token) ){
            $user_token = Session::get('user.token');
        }
        if( Session::has('user.token') ){
            return true;
        }
        return false;
    }

    // action 行动授权
    public function actonAuth( string $url, string $method, )
    {
        // is login
        $uuid = '';
        return true;
    }

    // app authorization 授权
    public function ssoAuth( string $app_id, string $token )
    {
        // is login
        // 应用授权验证
    }

}