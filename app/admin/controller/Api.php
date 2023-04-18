<?php
namespace app\admin\controller;

use think\facade\Request;

class Api extends Base
{
    private $rr = [
        'code' => 200,
        'status' => false,
        'msg' => '',
        'data' => '',
    ];

    // login
    public function login()
    {
        if( Request::isPost() ){
            $param = Request::param();
            $rr['data'] => $param;
            return json($rr);
        }
    }
    
    // is login
    public function isLogin()
    {
        if( Request::isPost() ){
            $param = Request::param();
            $rr['data'] => $param;
            return json($rr);
        }
    }

    // user
    public function user()
    {

    }

    // role
    public function role()
    {
        Request::isGet();
        Request::isPost();
        Request::isPut();
        Request::isDelete();
    }

    // rule
    public function rule()
    {
        Request::isGet();
        Request::isPost();
        Request::isPut();
        Request::isDelete();
    }
}