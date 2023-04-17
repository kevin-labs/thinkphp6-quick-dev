<?php
use think\facade\Route;

Route::group('api', function () {
    Route::rule(':id', 'blog/read');
    Route::rule(':name', 'blog/read');
});