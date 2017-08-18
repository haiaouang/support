# support
[![Latest Stable Version](http://www.maiguoer.com/haiaouang/pusher/stable.svg)](https://packagist.org/packages/haiaouang/pusher)
[![License](http://www.maiguoer.com/haiaouang/pusher/license.svg)](https://packagist.org/packages/haiaouang/pusher)

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

设置推送信息的参数 config/pushers.php

## 调用

选取对应的推送驱动，暂时只支持[小米推送](https://github.com/haiaouang/mipush)，如需其他推送驱动可联系开发人员或自行开发

```php
    Push::launcher('mipush');
```

完整示例

```php
<?php

namespace App\Http\Controllers

use Hht\Support\Facades\Push;

class TestController extends Controller {
    
    public function test()
    {
        $testPusher = Push::launcher('mipush');
    }
   
}

```

## 依赖包

* haiaouang/pusher : https://github.com/haiaouang/pusher
* haiaouang/mipush : https://github.com/haiaouang/mipush
