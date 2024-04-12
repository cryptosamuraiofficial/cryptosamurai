<?php
namespace app\api\behavior;
use think\Config;
use think\Response;
class CORS
{
    public function appInit()
    {
    	header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Methods:GET, POST, OPTIONS, DELETE");
        header("Access-Control-Allow-Headers:DNT,X-Mx-ReqToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type, Accept-Language, Origin, Accept-Encoding");
        header("Access-Control-Allow-Credentials:true"); 
        if (request()->isOptions()) {
            exit();
        }
/*         if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        exit;
        } */
    }
}
