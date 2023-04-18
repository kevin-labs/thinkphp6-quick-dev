<?php
namespace app\admin\controller;

use think\facade\Config;
use think\facade\View;
use think\facade\Request;

class Views extends Base
{
    public function __construct()
    {
        // 父类
        parent::__construct();

        // css
        View::assign('css',[]);
        // script
        View::assign('script',[]);
        // custom
        View::assign('custom',[
            'css' => [],
            'js' => [],
        ]);
        // seo
        View::assign('seo',[

        ]);
        // menu
        View::assign('menu',[

        ]);
    }

    public function index()
    {
        return View::fetch('index');
    }

    // 注册
    public function regin()
    {
        return View::fetch('regin');
    }

    // 登录
    public function login()
    {
        return View::fetch('login');
    }

    // 用户
    public function user( string $handle = null )
    {
        // d($handle);
        return View::fetch('user');
    }

    public function auth( string $handle = null )
    {
        // d($handle);
        return View::fetch('auth');
    }

    // 角色
    public function role( string $handle = null )
    {
        // d($handle);
        return View::fetch('role');
    }

    // 规则
    public function rule( string $handle = null )
    {
        // d($handle);
        return View::fetch('rule');
    }
}