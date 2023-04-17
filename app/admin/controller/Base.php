<?php
namespace app\admin\controller;

use app\BaseController;

use think\facade\Config;

class Base extends BaseController
{
    public function __construct()
    {
        // view
        Config::set([
            'view_dir_name' => 'view/admin/default',
            'layout_on'     =>  true,
            'layout_name'   =>  'layout',
        ], 'view');

        // app custom
        // Config::set([], 'app_custom');
    }

    // view
    public function view()
    {}
}