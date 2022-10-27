# unidesk SDK for PHP

## 运行环境
- PHP 7+
- cURL extension

## 安装方法

1. 如果您通过composer管理您的项目依赖，可以在你的项目根目录运行：

        $ composer require unidesk/taobao-top-sdk

   或者在你的`composer.json`中声明对Aliyun OSS SDK for PHP的依赖：

        "require": {
            "unidesk/taobao-top-sdk": "dev-master"
        }

   然后通过`composer install`安装依赖。composer安装完成后，在您的PHP代码中引入依赖即可：

        require_once __DIR__ . '/vendor/autoload.php';
        
## 快速使用

### 常用类

| 类名 | 解释 |
|:------------------|:------------------------------------|
|Topsdk\Topapi\TopApiClient | unidesk客户端类 |
|Topsdk\Topapi\Ability304\Request | 开放平台接口类|
|Topsdk\Topapi\Ability371\Request | 开放平台接口类|
|Topsdk\Topapi\Ability375\Request | 开放平台接口类|
|Topsdk\Topapi\Ability376\Request | 开放平台接口类|
|Topsdk\Topapi\Ability865\Request | 开放平台接口类|
|Topsdk\Topapi\Defaultability\Request | unidesk接口类|

### TopApiClient初始化

实例化TopApiClient类完成的，下面代码创建一个TopApiClient对象,及其接口调用:

```php
<?php
// create Client
$client = new TopApiClient("<your-appkey>","<your-appsecret>","<top-gateway-url>");
$ability = new Ability304($client);

// create domain

// create request
$request = new TaobaoTopAuthTokenCreateRequest();
$request->setCode("0_ebKlCPqc6OD8RBlB0DzfnpUg2");
$request->setUuid("abc");

$response = $ability->taobaoTopAuthTokenCreate($request);
var_dump($response);
```

响应示例:

```php
{
    "top_auth_token_create_response":{
        "token_result":"{\\\"w2_valid\\\":1437127235362,\\\"r1_valid\\\":1437129035362,\\\"sp\\\":\\\"tbUIC\\\",\\\"r2_valid\\\":1437127235362,\\\"w1_valid\\\":1437129035362,\\\"locale\\\":\\\"zh_CN\\\",\\\"user_id\\\":\\\"2021891722\\\",\\\"expire_time\\\":1468663236386,\\\"refresh_token\\\":\\\"50003400e34kgvzoweD0nUeMwB0ueXeDQiOVxdkmKpaeVW18619220EhyAKWUVQYqLE2\\\",\\\"user_nick\\\":\\\"yexue08\\\",\\\"refresh_token_valid_time\\\":1437129035362,\\\"access_token\\\":\\\"50002400834dMShsDmop3NrEfaozeisCSTGAfbuCl0YdKH15967dafOlxfMa3oYlpO2Q\\\"}\",     \"request_id\": \"16sd74g5krf9u\"   }"
    }
}
```

