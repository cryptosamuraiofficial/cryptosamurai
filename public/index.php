<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
// header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS,PATCH');
// header("Access-Control-Allow-Headers:DNT,X-Mx-ReqToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type, Accept-Language, Origin, Accept-Encoding,Authorization,Token");
/* */
// $input_string = file_get_contents("php://input");
// file_put_contents('ErrorInfoLog.log',date('Y-m-d H:i:s',time()).' 输入变量:'.$input_string.' 请求ip:'. $_SERVER["REMOTE_ADDR"].PHP_EOL,FILE_APPEND);//记录LOG文件
// set_time_limit(0); //执行时间无限
// ini_set('memory_limit', '-1'); //内存无限
header("Access-Control-Allow-Origin:*");
header("Access-Control-Max-Age:3600");//跨域 option请求记入缓存 3600秒 即一小时
header('Access-Control-Allow-Methods:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Expose-Headers:Token');
header('Access-Control-Expose-Headers:Sign');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Methods:GET, POST, OPTIONS, DELETE");
    header("Access-Control-Allow-Headers:x-requested-with, Referer,content-type,token,sign,DNT,X-Mx-ReqToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type, Accept-Language, Origin, Accept-Encoding");
    // 不用多说，就是上面三行，注意第三行，里面有一个参数：token，这个是为后面自定义header头准备的

    exit;
} 
// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
