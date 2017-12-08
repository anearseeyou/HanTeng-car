<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/26 0026
 * Time: 下午 4:14
 */
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use EasyWeChat\Foundation\Application;
use DB;	

class WechatUserController extends Controller
{
	//
	public function index(Application $application){

		$users = DB::select('select id,truename,answernum,tel,wechatid,wechat,addr,is_share,reward_id_one,reward_id_two from wechat_users');

		return view('backend.access.index',['users' => $users]);
	}

	public function active(Application $application){

		$users = DB::select('select id,truename,tel,wechat,addr,send,reward_id_one,reward_id_two from wechat_users where reward_id_one <>10 or reward_id_two <>10');

		return view('backend.access.active',['users' => $users]);
	}
}