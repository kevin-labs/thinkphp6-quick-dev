<?php
namespace app\admin\controller;

use think\facade\Config;
use think\facade\View;

class Views extends Base
{
    public function index()
    {
        return View::fetch('index');
    }

    public function regin()
    {
        return View::fetch('regin');
    }

    public function login()
    {
        return View::fetch('login');
    }
}