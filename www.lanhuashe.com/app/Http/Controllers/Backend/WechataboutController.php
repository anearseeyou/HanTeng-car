<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class WechataboutController extends Controller
{
   /*
    计入用户回答错误次数，用于统计
   */
	public function answernum($openid)
	{
        $num    = DB::select('select answernum from wechat_users where wechatid = :wechatuser',['wechatuser'=>$openid]);
        $num    = $num[0]->answernum;
        $num    = $num+1;
        $answer = DB::update('update wechat_users set answernum = ? where wechatid = ?',[$num,$openid]);
	}

    /*
     * 用户回答正确标识
     */
    public function answerright($openid)
    {
        $answer = DB::update('update wechat_users set answerright = 1 where wechatid = ?',[$openid]);
    }

    /*
     * 获取用户是否回答成功
     */
    public function getanswerright($openid)
    {
        $answer = DB::select('select answerright from wechat_users where wechatid = :wechatuser',['wechatuser'=>$openid]);

        return json_encode($answer[0]->answerright);
    }

    /*
      领奖信息填写更新
     **/
    public function updateinfo($truename,$tel,$wechat,$addr,$reward,$openid,$sec){
        
        $share = DB::select('select id,is_share,reward_id_one,reward_id_two,reward_id_three,reward_id_four from wechat_users where  wechatid = :wechatuser', ['wechatuser' => $openid]);

        DB::update('update wechat_users set truename = ?, wechat = ?, tel = ?, addr = ?, sec = ? where id = ?',[$truename,$wechat,$tel,$addr,$sec,$share[0]->id]); 
        
    }

    /*
     * 抽奖未抽中
     */
    public function updateinfopost($openid,$reward){

        $data = date('Y-m-d',time());

        $share = DB::select('select id,is_share,reward_id_one,reward_id_two,reward_id_three,reward_id_four from wechat_users where  wechatid = :wechatuser', ['wechatuser' => $openid]);
        
        if($share[0]->is_share == 0 && $share[0]->reward_id_one != 10 && $share[0]->reward_id_two != 10){/*未分享，已经抽过两次奖*/

            return json_encode('0');

        }elseif($share[0]->is_share == 0 && $share[0]->reward_id_one != 10 && $share[0]->reward_id_two == 10){/*未分享，抽过一次奖*/

            DB::update('update wechat_users set reward_id_two = ?, created_at = ? where id = ?',[$reward,$data,$share[0]->id]); 

            return json_encode('1');

        }elseif($share[0]->is_share == 0 && $share[0]->reward_id_one == 10 && $share[0]->reward_id_two == 10){/*未分享，一次奖都没抽过*/

            DB::update('update wechat_users set reward_id_one = ?, created_at = ? where id = ?',[$reward,$data,$share[0]->id]); 

            return json_encode('1');

        }elseif($share[0]->is_share == 1 && $share[0]->reward_id_three != 10 && $share[0]->reward_id_four != 10 && $share[0]->reward_id_one != 10 && $share[0]->reward_id_two != 10){/*已分享，抽过四次奖*/

            return json_encode('0');

        }elseif($share[0]->is_share == 1 && $share[0]->reward_id_one != 10 && $share[0]->reward_id_two != 10 && $share[0]->reward_id_three != 10 && $share[0]->reward_id_four == 10){/*已分享，抽过三次奖*/

            DB::update('update wechat_users set reward_id_four = ?, created_at = ? where id = ?',[$reward,$data,$share[0]->id]);

            return json_encode('1');

        }elseif($share[0]->is_share == 1 && $share[0]->reward_id_one != 10 && $share[0]->reward_id_two != 10 && $share[0]->reward_id_three == 10 && $share[0]->reward_id_four == 10){/*已分享，抽过两次奖*/

            DB::update('update wechat_users set reward_id_three = ?, created_at = ? where id = ?',[$reward,$data,$share[0]->id]);

            return json_encode('1');

        }elseif($share[0]->is_share == 1 && $share[0]->reward_id_one != 10 && $share[0]->reward_id_two == 10 && $share[0]->reward_id_three == 10 && $share[0]->reward_id_four == 10){/*已分享，抽过一次奖*/

            DB::update('update wechat_users set reward_id_two = ?, created_at = ? where id = ?',[$reward,$data,$share[0]->id]);

            return json_encode('1'); 

        }elseif($share[0]->is_share == 1 && $share[0]->reward_id_one == 10 && $share[0]->reward_id_two == 10 && $share[0]->reward_id_three == 10 && $share[0]->reward_id_four == 10){/*已分享，没抽过奖 */

            DB::update('update wechat_users set  reward_id_one = ?, created_at = ? where id = ?',[$reward,$data,$share[0]->id]); 

            return json_encode('1');

        }else{
            return json_encode('0');
        }
    }

    /*
     * 用户分享记录
     */
    public function share($userid){
        //$user_id = $useid;
        DB::update('update wechat_users set is_share = 1 where wechatid = ?', [$userid]);
    }

    /*获取用户钟建新*/
    public function getuserinfo($openid){

        $info = DB::select('select is_share, reward_id_one,reward_id_two,reward_id_three,reward_id_four from wechat_users where  wechatid = :wechatuser', ['wechatuser' => $openid]);
        

        $infoarr = [$info[0]->reward_id_one,$info[0]->reward_id_two,$info[0]->reward_id_three,$info[0]->reward_id_four];

        $i = 0;

        foreach ($infoarr as $key => $value) {
            if($value != 1 && $value != 10 ){
                $i = $i+1;
            }
        }

        if($i>=1){
            return json_encode('0');
        }else{
            return json_encode('1');
        }
    }
}