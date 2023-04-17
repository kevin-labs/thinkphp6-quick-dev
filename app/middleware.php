<?php
// 全局中间件定义文件
return [

    // api
    \app\admin\middleware\Api::class,

    // 后台权限
    \app\admin\middleware\Auth::class,
    
    // 全局请求缓存
    // \think\middleware\CheckRequestCache::class,

    // 多语言加载
    // \think\middleware\LoadLangPack::class,

    // Session初始化
    \think\middleware\SessionInit::class,
];
