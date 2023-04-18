<?php
use think\facade\Route;

/**
 * Casdoor SSO 登录
 * https://github.com/casdoor/casdoor-php-sdk/blob/master/README_zh-CN.md
 * https://github.com/jasny/sso
 */
Route::group('api/sso', function () {
    // 获取用户JWT令牌
    Route::rule('get_user_jwt_auth', 'app\admin\controller\SSO@role');
    // 校验与解析用户令牌
    Route::rule(':name', 'app\admin\controller\SSO@role');
    // 交互
});