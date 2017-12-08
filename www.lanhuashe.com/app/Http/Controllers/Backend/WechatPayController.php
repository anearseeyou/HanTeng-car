<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class WechatPayController extends Controller
{

	public function index(Application $application,Request $request)
	{
		$sends = DB::select('select send,reward_id_one,reward_id_two,reward_id_three,reward_id_four from wechat_users where wechatid = :wechatuser',['wechatuser'=>$request->openid]);
		$num = DB::select('select redbag from rotates where id = 1');
        if($request->openid == '' || empty($request->openid) || empty($sends)){
            return json_encode('2');
        }elseif($num[0]->redbag <= 0){
					 return json_encode('0');
				}elseif($sends[0]->send == 127){
            return json_encode('0');
        }elseif(($request->num == 3 && $request->openid != '' && !empty($request->openid) && $sends[0]->send != 127) || $sends[0]->reward_id_one == 3 || $sends[0]->reward_id_two == 3 || $sends[0]->reward_id_three == 3 || $sends[0]->reward_id_four == 3){

            $billno = 'ht'.time();

            $openid = $request->openid;

            $pay = $application->lucky_money;


            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => $openid,
                'total_num'        => 1,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

            DB::update('update wechat_users set send = 127 where wechatid = ?',[$openid]);

            return json_encode('1');
        }
	}

    public function mini(Request $request)
    {
        $sends = DB::select('select send,reward_id_one,reward_id_two,reward_id_three,reward_id_four from wechat_users where wechatid = :wechatuser',['wechatuser'=>$request->openid]);

        if($request->openid == '' || empty($request->openid) || empty($sends)){
            return json_encode('2');
        }elseif($sends[0]->send == 126){
            return json_encode('0');
        }else{
            DB::update('update wechat_users set send = 126 where wechatid = ?',[$request->openid]);
            return json_encode('1');
        }
    }
    //oJRXtwXdJRmoh5ypSYWYbRolUgeA oJRXtwXdJRmoh5ypSYWYbRolUgeA oJRXtwXdJRmoh5ypSYWYbRolUgeAoJRXtwZEMCffKUeZaQP-W1tte6wQ  oJRXtwZEMCffKUeZaQP-W1tte6wQ
    public function wy2(Application $application,Request $request)
    {

            $billno = 'ht'.time();

            $pay = $application->lucky_money;


            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwZEMCffKUeZaQP-W1tte6wQ',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

    }

    public function wy1(Application $application,Request $request)
    {

            $billno = 'ht'.time();

            $pay = $application->lucky_money;


            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwT5aaJjfypbHOt-h0-ndW1E',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

    }
    public function bskl(Application $application,Request $request)
    {

            $billno = 'ht'.time();

            $pay = $application->lucky_money;


            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwSXGYXrls2nTnmT6h5X8MuA',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

    }

    public function wbkx(Application $application,Request $request)
    {

            $billno = 'ht'.time();

            $pay = $application->lucky_money;


            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwUQO2qYt8e0f7nGuilrlt-s',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

    }

    public function wy9(Application $application,Request $request)
    {

            $billno = 'ht'.time();

            $pay = $application->lucky_money;


            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwW6ukIC56XT4mnhHWZmxbio',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

    }

    public function asdy(Application $application,Request $request)
    {

            $billno = 'ht'.time();

            $pay = $application->lucky_money;


            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwTBs622VCVVFWWFRo0tr4GE',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

    }


    public function yibao(Application $application,Request $request){

            $billno = 'ht'.time();

            $pay = $application->lucky_money;

            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwXdJRmoh5ypSYWYbRolUgeA',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];

            $result = $pay->sendNormal($paydata);

    }

    public function wy3(Application $application,Request $request){

            $billno = 'ht'.time();

            $pay = $application->lucky_money;

            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwfhB5qX7OztmQfe28EwNcA8',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];

            $result = $pay->sendNormal($paydata);

    }

    public function wda(Application $application,Request $request){

            $billno = 'ht'.time();

            $pay = $application->lucky_money;

            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwV6PlhHS9RtyfKVawv7JFV8',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];

            $result = $pay->sendNormal($paydata);

    }

    public function wy4(Application $application,Request $request){

            $billno = 'ht'.time();

            $pay = $application->lucky_money;

            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwVeoMROMvYRWt_cqNwP8Ps8',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];

            $result = $pay->sendNormal($paydata);

    }

    public function xuanmai(Application $application,Request $request){

            $billno = 'ht'.time();

            $pay = $application->lucky_money;

            $paydata = [
                'mch_billno'       => $billno,
                'send_name'        => '汉腾汽车',
                're_openid'        => 'oJRXtwVLV21S3mxYQmAY9G9OFbCs',
                'total_num'        => 100,
                'total_amount'     => 200,
                'wishing'          => '感谢您参与汉腾汽车大转盘活动，敬请您持续关注我们！',
                'client_ip'        => '192.168.0.1',
                'act_name'         => '汉腾汽车幸运转盘',
                'remark'           => '请叫我雷锋，凌晨3点多，还在为你们赶制制红包的功能！！！'
            ];
            $result = $pay->sendNormal($paydata);

    }
    /*public function card(Application $application,Request $request){
        $card   = $application->card;
		
        $cardType = 'GENERAL_COUPON';
		
        $baseInfo = [
            'logo_url' => 'http://www.lanhuashe.com/images/logowechat.png',
            'brand_name' => '汉腾汽车',
            'code_type' => 'CODE_TYPE_TEXT',
            'title' => '优惠券',
            'sub_title' => '详情请咨询当地经销商',
            'color' => 'Color090',
            'notice' => '兑换时请出示此二维码',
            'description' => "此优惠券仅为参与汉腾举办的\n微信大转盘幸运活动时发放，具体信息请咨询\n您当地的经销商",
            'date_info' => [
              'type' => 'DATE_TYPE_FIX_TERM',
              'fixed_term' => 1,       
              ]
            ]
    }*/

    public function creat_qrcode(Application $application,Request $request){

        $sends = DB::select('select send,reward_id_one,reward_id_two,reward_id_three,reward_id_four from wechat_users where wechatid = :wechatuser',['wechatuser'=>$request->openid]);

        if($request->openid == '' || empty($request->openid) || empty($sends)){
            return json_encode('2');
        }elseif($sends[0]->send == 122){
            return json_encode('0');
        }else{
            DB::update('update wechat_users set send = 122 where wechatid = ?',[$request->openid]);

            $card   = $application->card;

            if($request->input('esc') == 1){
                $card_id = 'pJRXtwerPMHC10iLmiptKiZcTOVM';
            }elseif($request->input('esc') == 2){
                $card_id = 'pJRXtwQIJsVK_Ry-bT8mt5k-2QPI';
            }elseif($request->input('esc') == 3){//pJRXtwZmx8Ineo8LpVk_yLrjl0Qg
                $card_id = 'pJRXtwZmx8Ineo8LpVk_yLrjl0Qg';
            }

            $cards = [
                'action_name' => 'QR_CARD',
                'expire_seconds' => 1800,
                'action_info' => [
                  'card' => [
                    'card_id' => $card_id,
                    "openid"  => $request->input('openid'),
                    'is_unique_code' => false,
                    'outer_id' => 1,
                  ],
                ],
              ];
            $result = $card->QRCode($cards);
            return json_encode($result);
        }
    }

    public function creat_ticket(Application $application,Request $request){
        $card   = $application->card;

        $ticket = $request->input('ticket');

        $result = $card->getQRCodeUrl($ticket);

        return json_encode($result);
    }
}
    