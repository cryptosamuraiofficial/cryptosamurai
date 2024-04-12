<?php
namespace app\index\controller;
//use app\index\traits\RedisHash;
use app\index\traits\RedisHash;
use app\index\traits\RedisToken;
use app\index\traits\RedisUtils;
use think\Controller;
//use app\index\traits\RedisUtils;
use think\Db;
//use Xiaobopang\RedisLock;

class Index extends Controller
{

    function  test(){
        var_dump(1);
    }
    function  redisLock(){
        $redis = new RedisLock("127.0.0.1",6379,"",10);
        $test = $redis->tryLock("role_lock",$redis->getMilliSecond()+20*1000);
        sleep(2);
        $bb = $redis->releaseLock("role_lock", $redis->getMilliSecond()+20*1000+10);
        var_dump($test);
        exit();
    }

    function  redisLocktest(){
        $redis = new RedisLock("127.0.0.1",6379,"",10);
        $test = $redis->tryLock("role_lock",$redis->getMilliSecond()+20*1000);
        $time = $redis->getMilliSecond()+20*1000;
        $redis->block("role_lock", $time);
        var_dump($test);
    }

    function  select_role(){
        $redis_sort = new RedisUtils();
        $redis = new RedisHash([],"role:");
        $list = $redis_sort->zrange("role_price:0","0","9");
        $return_list = array();
        foreach($list as $k=>$v){
            $return_list[] = $redis->getByHashKey("role:".$v);
        }
        var_dump($return_list);
        exit();
    }
    /**
     * @param $type
     * @param $level
     * @param $cost_sort
     */
    function  select_equipment($type = null,$level = null,$cost_sort = "0"){
//        switch ($cost_sort) {
//            case '1':
//                $sql_sort = 'b.price asc';
//                break;
//            case '2':
//                $sql_sort = 'b.price desc';
//                break;
//            default:
//                $sql_sort = 'a.creation_time desc';
//                break;
//        }


        exit;
    }



        function testaa(){
            $redisToken = new RedisToken();
            $redisToken->set("22".":token",123);
            $redisToken->set("33".":time",123);
        }
}
