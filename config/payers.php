<?php

return [

    'default' => 'alipay',

    'launchers' => [

        'alipay' => [
			'driver' => 'alipay',
			
			//合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串
			'partner' => '',

			//收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
			'seller_id' => '',

			//商户的私钥,此处填写原始私钥去头去尾
			'private_key' => '',

			//支付宝的公钥
			'alipay_public_key' => '',

			//签名方式
			'sign_type' => 'RSA',

			//字符编码格式 目前支持 gbk 或 utf-8
			'input_charset' => 'utf-8',

			// 支付类型 ，无需修改
			'payment_type' => '1',

			// 产品类型，无需修改
			'service' => 'create_direct_pay_by_user',

			// 产品类型，无需修改
			'sdk_service' => 'mobile.securitypay.pay',

			// 支付超时时间
			'payment_time' => '30m',
	
        ],

    ],

];