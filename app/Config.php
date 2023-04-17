<?php
declare (strict_types = 1);

namespace app;

class Config
{
    public $config;

    public function __construct()
    {
        // 加载全局应用配置
        $this->config = require app()->getRootPath() . '/application.php';

        // Version
        $this->config['version'] = self::getVersion();
    }

    // 获取配置
    public function get()
    {
        return $this->config;
    }

    // 获取系统版本信息
    public function getVersion()
    {
        // 读取根目录的版本数据，不支持校验。
        return file_get_contents( app()->getRootPath() . '/VERSION' );
    }
}