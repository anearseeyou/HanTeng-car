<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use DB;
class RewardaboutController extends Controller
{
   /*
    * 转盘设置相关
    */
   public function set($openid){

        $now = time();
        
        $reward = DB::select('select * from rotates where id > 0');

        foreach($reward as $key=>$val){

            if( $now >strtotime($val->start_time) && $now<strtotime($val->stop_time)){
                $res['yz']['id']          = $val->id;
                $res['yz']['iphone']      = $val->iphone;
                $res['yz']['iphonep']     = $val->iphonep;
                $res['yz']['chemo']       = $val->chemo;
                $res['yz']['ipadmini']    = $val->ipadmini;
                $res['yz']['redbag']      = $val->redbag;
                $res['yz']['gouche']      = $val->gouche;
            }else{
                $res['sum']         = 55;
                $res['type']        = 1;
            }
        }

        return json_encode($res);
   }

   public function get($id,$type){
        
        $reward = DB::select('select '.$type.' from rotates where id ='.$id);

        $num = $reward[0]->$type;

        if($num == 0){
          return json_encode('0');
        }else{
          DB::update('update rotates set '.$type.' = '.($num-1).' where id = '.$id);
          return json_encode('1');
        }
   }

   public function rand(){
        
        $array = [1,2,3];

        return array_rand($array);
   }

   public function can($wid){

      $res = DB::select("select * from wechat_users where wechatid = '".$wid."'");

      //echo $res[0]->reward_id_one;

      $a[] = $res[0]->reward_id_one;
      $a[] = $res[0]->reward_id_two;
      $a[] = $res[0]->reward_id_three;
      $a[] = $res[0]->reward_id_four;
      $i = 0;
      foreach ($a as $key => $value) {
        if($value == 3){
          $i = $i+1;
        }
      }
      if($i>1){

        return json_encode(0);

      }else{
        return json_encode(1);
      }

   }
	
}