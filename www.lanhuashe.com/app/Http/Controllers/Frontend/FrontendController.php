<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Wechats\WechatUser;
use DB;
use Redirect;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * 首页
     */
    public function index(Application $application,Request $request)
    {
        /*微信JS*/
        $js             = $application->js;
        /*seesion中的oauth权限*/
        $wechatuser     = session('wechat.oauth_user');
        /*查看数据库，是否存在用户信息*/
        $user = DB::select('select id, is_share, reward_id_one, reward_id_two, reward_id_three, reward_id_four from wechat_users where  wechatid = :wechatuser', ['wechatuser' => $wechatuser->id]);

        if(empty($user)){
            DB::insert('insert into wechat_users (wechatid) values (?)', [$wechatuser->id]);

            $allow      = 1;

        }else{

            if($user[0]->is_share == 1 && $user[0]->reward_id_one != 10 && $user[0]->reward_id_two != 10 && $user[0]->reward_id_three != 10 && $user[0]->reward_id_four != 10){
                $allow  = 0;
            }elseif($user[0]->is_share == 0 && $user[0]->reward_id_one != 10 && $user[0]->reward_id_two != 10){
                $allow  = 0;
            }else{
               $allow   = 1;
            }
        }

        return view('frontend.index',['js'=>$js,'openid' => $wechatuser->id,'allow' => $allow,'tick' =>'0']);

    }


    /**
     * @return \Illuminate\View\View
     */
    public function ask(Application $application,Request $request)
    {
        /*微信JS*/
        $js             = $application->js;
        /*seesion中的oauth权限*/
        $wechatuser     = session('wechat.oauth_user');

        return view('frontend.ask',['js'=>$js,'openid' => $wechatuser->id]);

    }



    /*****
     * 获奖页面
     * */
    public function reward(Application $application,Request $request,$num,$sec,$id){
        /*微信JS*/
        $js             = $application->js;
        /*seesion中的oauth权限*/
        $wechatuser     = session('wechat.oauth_user');

        return view('frontend.reward',['js'=>$js,'num' => $num,'openid' => $wechatuser->id, 'sec' => $sec,'id'=>$id]);

    }


    /*****
     *
     * */
    public function query(Application $application,Request $request,$num,$sec,$id){
        /*微信JS*/
        $js             = $application->js;
        /*seesion中的oauth权限*/
        $wechatuser = session('wechat.oauth_user');

        return view('frontend.queryinfo',['js'=>$js,'num' => $num,'openid' => $wechatuser->id, 'sec'=>$sec,'id'=>$id]);
    }

    public function query_tick(Application $application,Request $request){

        $wechatuser     = session('wechat.oauth_user');

        $request->session()->put('wuser.tick', $request->tick);
    }

    public function click_tick(Request $request){

        $request->session()->put('wuser.ticked', '11111');
    }

    public function rewarded(Request $request,$num,$openid){
        if ($request->session()->has('wuser-.'.$num.$openid)) {
            return json_encode('0');
        }else{
            $request->session()->put('wuser-.'.$num.$openid, $num);
            return json_encode('1');
        }
    }

    public function end(Application $application,Request $request){
        $src = $request->input('img');
       return json_encode($src);
    }

    public function test(Application $application){
      $js             = $application->js;
    }

}
