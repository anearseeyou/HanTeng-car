<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Requests;

class BskleController extends Controller{
	public function index(Application $application,Request $request){
		//dd($application);
			$billno = 'ht'.time();
            $pay = $application->lucky_money;
            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwT5aaJjfypbHOt-h0-ndW1E',
                'total_num'        => 1,  
                'total_amount'     => 100, 
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1', 
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);
     
	}
}