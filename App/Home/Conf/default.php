<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/25
 * Time: 16:50
 */
return [
    'VERSION'        => '201703010020',
    'APP_HOST'       => 'dev.izhuyan.com',//该网址默认域名
    'SITEURL'        => 'http://dev.izhuyan.com',//项目首页地址

    //模板全局替换内容
    'MODULE_REPLACE' => [
        '__PUBLIC__'   => '',
        '__JS_DIR__'   => '',
        '__CSS_DIR__'  => '',
        '__DF_FACE__'  => '',
        '__RESOURCE__' => '',
    ],

    //易订货配置
    'YDH_CONF'       => [
        'client_id'     => '4185721',
        'client_secret' => 'pxNsnOyM1sISOSD5RcB0PY2ay9z8g2YA',
        'user_name'     => 'Xsh13166240671',
        'password'      => '123456',
        'url_host'      => 'https://api.dinghuo123.com/v2',
    ],
    //畅捷通配置
    'CJT_CONF'       => [
        'app_key'        => '59121555-f3a4-45e0-950b-709562418290',
        'app_secret'     => 'zqn312',
        'user_name'      => '18916176965',
        'password'       => 'dy12345678',
        'account_number' => '004',
        'url_host'       => 'http://106.14.5.135:8080/tplus/api/v1',
    ],

    /*'CJT_CONF'       => [
        'app_key'        => '59121555-f3a4-45e0-950b-709562418290',
        'app_secret'     => 'zqn312',
        'user_name'      => '18817834950',
        'password'       => '15855463772w',
        'account_number' => '001',
        'url_host'       => 'http://115.159.36.64:8080/tplus/api/v1',
    ],*/
    //测试环境
    /*'YDH_CONF'       => [
        'client_id'     => '4204726',
        'client_secret' => 'hcHnHkI1FBQ3aL72njtFht4dAc5aPnyW',
        'user_name'     => '310219043',
        'password'      => 'luoyongwen0710',
        'url_host'      => 'https://api.dinghuo123.com/v2',
    ],
    'CJT_CONF'       => [
        'app_key'        => '59121555-f3a4-45e0-950b-709562418290',
        'app_secret'     => 'zqn312',
        'user_name'      => '18817834950',
        'password'       => '15855463772w',
        'account_number' => '001',
        'url_host'       => 'http://106.14.5.135:8080/tplus/api/v1',
    ],*/

    'DEBUG' => true,
];