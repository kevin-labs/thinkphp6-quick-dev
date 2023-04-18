# ThinkPHP6 的快速开发基础

基于 ThinkPHP6 的快速开发基础.

1. Api+MVC兼容的模式，原生模板标签；
2. 使用强制路由，所以请求都需要经过路由；
3. 单应用模式下的多模块，默认只有 admin 管理模块；
4. 应用配置: application.php 配置文件或者，加载数据库配置；

### 开发计划

#### 完成

#### 计划

- 基础权限管理:登录，注册，用户管理，权限管理；
- SSO 单点登录；
- 上传，资源管理；
- 通知（邮箱，短信，第三方）；支付(卡密支付，扫码支付)；
- 插件和钩子；
- 后台API化；

### 前端

尽量都是远程资源加载，公共CDN库。

1. app.common.js 是基础的公共js
2. app.load.js 前端境内外分流限制，恶意请求拦截。

公共CDN：

1. 国内 staticfile.org cdn.staticfile.org
2. 海外 jsdelivr.net cdn.jsdelivr.net

#### Tabler 管理模板
https://demo.szky.info/html/admin/tabler-1.0.0-beta16/demo/index.html

#### Jquey
https://cdn.bootcdn.net/ajax/libs/jquery/3.6.4/jquery.min.js

#### axios
https://unpkg.com/axios/dist/axios.min.js

#### alpinejs
https://cdn.bootcdn.net/ajax/libs/alpinejs/3.12.0/cdn.min.js

#### sweetalert2 和 notyf 提示

sweetalert2
https://sweetalert2.github.io/
https://github.com/sweetalert2/sweetalert2
```
Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
```

notyf
https://github.com/caroso1222/notyf
```
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
// Create an instance of Notyf
var notyf = new Notyf();
// Display an error notification
notyf.error('You must fill out the form before moving forward');
// Display a success notification
notyf.success('Your changes have been successfully saved!');
```

#### highlight 代码高亮
```
<link rel="stylesheet" href="//cdn.staticfile.org/highlight.js/11.7.0/styles/base16/atelier-dune-light.min.css">
<script src="//cdn.staticfile.org/highlight.js/11.7.0/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
```
#### nprogress 进度条
https://rstacruz.github.io/nprogress/
https://github.com/rstacruz/nprogress

### PHP Composer

think
https://www.kancloud.cn/manual/thinkphp6_0
think-orm
https://www.kancloud.cn/manual/think-orm
think-view
https://www.kancloud.cn/manual/think-template/

topthink/think-filesystem 和 flysystem 冲突被去除


#### flysystem
Flysystem是一个PHP文件存储库。
https://flysystem.thephpleague.com/docs/
```
composer require league/flysystem:^3.0
```

#### kint
好用的调试输出
https://kint-php.github.io/kint/
```
composer require kint-php/kint
```

#### w7/engine-validate
微擎表单验证 - 增强表单验证-管理验证场景
https://v.neww7.com/
```
composer require w7/engine-validate
```

#### rosell-dk/webp-convert
使用PHP将jpeg/png转换为webp（如果可能的话）
https://github.com/rosell-dk/webp-convert
```
composer require rosell-dk/webp-convert
```


#### Apidoc
Apidoc是一个通过解析注解生成Api接口文档的PHPcomposer扩展；兼容Laravel、ThinkPHP、Hyperf、Webman等框架；
https://docs.apidoc.icu/
https://github.com/HGthecode/apidoc-php
```
composer require hg/apidoc
```

#### casdoor/casdoor-php-sdk
casdoor 支持 OAuth 2.0、OIDC 和 SAML 的 UI 优先集中式身份验证/单点登录 (SSO) 平台，与 Casbin RBAC 和 ABAC 权限管理集成
https://casdoor.org/zh


#### lcobucci/jwt
is a framework-agnostic PHP library that allows you to issue, parse, and validate JSON Web Tokens based on the RFC 7519.
https://lcobucci-jwt.readthedocs.io/en/stable/
```
composer require lcobucci/jwt
```


#### paragonie/paseto
平台无关的安全令牌
https://paseto.io/
https://github.com/paragonie/paseto

#### UUID 
用户唯一标识
A PHP library for generating universally unique identifiers (UUIDs). 
https://github.com/ramsey/uuid
https://uuid.ramsey.dev
```
composer require ramsey/uuid
```

### 其他框架

海外的一些框架

#### laravel 

laravel 10x 更新频繁的PHP语言中的顶级框架
https://laravel.com/

基于 Laravel 现代开发框架
https://laravel-livewire.com

Lavalite，The Coder's CMS Recipe
https://lavalite.org

PHP 
https://appwrite.io/

Github topics
https://github.com/topics/laravel

#### symfony

symfony 组件式的框架，市场占有率很高的框架，使用率也很高，其他框架也使用部分组件。
https://symfony.com/

Projects using Symfony
https://symfony.com/projects

EasyAdmin is a fast, beautiful and modern admin generator for Symfony applications. 
https://github.com/EasyCorp/EasyAdminBundle
https://symfony.com/bundles/EasyAdminBundle/4.x/index.html

Github topics
https://github.com/topics/symfony


#### aplus-framework.com

A+是一个具有独立库的全栈框架
https://aplus-framework.com/
Docs
https://docs.aplus-framework.com/
轻量化的组件式框架，适合用来开发小应用

PHPFlasher是一个功能强大且易于使用的软件包，它允许您快速轻松地将Flash消息添加到Laravel或Symfony项目中。
https://php-flasher.io/

### 资料

1. https://github.com/ziadoz/awesome-php
2. https://github.com/chiraggude/awesome-laravel