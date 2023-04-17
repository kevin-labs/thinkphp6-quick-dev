<?php
use think\facade\Route;

Route::any('/login', 'app\admin\controller\Views@login');
Route::any('/regin', 'app\admin\controller\Views@regin');

Route::group('admin', function () {
    Route::rule('/index', 'app\admin\controller\Views@index');
    Route::rule('/auth', 'app\admin\controller\Views@index');

    Route::rule('', 'app\admin\controller\Views@index');
});