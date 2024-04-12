<?php
namespace app\index\controller;
class Profile 
{
  public $handle = null;
  public function _initialize()
  {
    parent::_initialize();
      // $redis = new Redis();
      // $this->handler = $redis-> handler();

  }


 public function countEndTime($findData){
  $endtime = $this->confInfo(128)["resources"]*60;
  foreach ($findData as $key => $value) {
    if($value['rec_time']){
      $findData[$key]['rec_time'] =$endtime-(time()-$value['rec_time']);
      if($findData[$key]['rec_time']<0){
        $findData[$key]['rec_time'] = 0;
      }
    }else{
      $findData[$key]['rec_time'] = 0;
    }
  }
  return $findData;
 }











}
