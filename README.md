# support
[![Latest Stable Version](http://www.maiguoer.com/haiaouang/support/stable.svg)](https://packagist.org/packages/haiaouang/support)
[![License](http://www.maiguoer.com/haiaouang/support/license.svg)](https://packagist.org/packages/haiaouang/support)

核心支持包，用于个人开发laravel包的支持包

## 安装
在你的终端运行以下命令

`composer require haiaouang/support`

或者在composer.json中添加

`"haiaouang/support": "1.0.*"`

然后在你的终端运行以下命令

`composer update`

在配置文件中添加 config/app.php

```php
    'providers' => [
        /**
         * 添加供应商
         */
        Hht\Support\ServiceProvider::class,
    ],
```

生成配置文件

`php artisan vendor:publish`

## 其他

* haiaouang/pusher : https://github.com/haiaouang/pusher
* haiaouang/mipush : https://github.com/haiaouang/mipush
* haiaouang/payer : https://github.com/haiaouang/payer
* haiaouang/alipay : https://github.com/haiaouang/alipay
