<?php
use think\facade\Route;

// 用户登录注册找回
Route::any('/login/[:handle]', 'app\admin\controller\Views@login');
Route::any('/regin/[:handle]', 'app\admin\controller\Views@regin');
Route::any('/activate/[:handle]/[:mail_token]', 'app\admin\controller\Views@regin');
Route::any('/reset/[:handle]', 'app\admin\controller\Views@regin');

// 管理后台
Route::group('admin', function () {
    Route::rule('/user/[:handle]', 'app\admin\controller\Views@user');
    Route::rule('/auth/[:handle]', 'app\admin\controller\Views@auth');

    Route::rule('/role/[:handle]', 'app\admin\controller\Views@role');
    Route::rule('/rule/[:handle]', 'app\admin\controller\Views@rule');
    
    Route::rule('/options/[:handle]', 'app\admin\controller\Views@rule');
    Route::rule('', 'app\admin\controller\Views@index');
});

// 管理后台api
Route::group('admin/api', function () {
    Route::rule('/role', 'app\admin\controller\Api@role');
    Route::rule('/rule', 'app\admin\controller\Api@rule');
    
    Route::rule('/login', 'app\admin\controller\Api@login');
    Route::rule('/regin', 'app\admin\controller\Api@login');
    Route::rule('/activate', 'app\admin\controller\Api@login');
    Route::rule('/reset', 'app\admin\controller\Api@login');
});
