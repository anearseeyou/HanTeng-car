<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Rotate\Rotate;

class RewardController extends Controller
{
    //
	public function index(){
		$rewards = Rotate::all();

		return view('backend.reward.index',['rewards' => $rewards]);
	}

	public function creat(){
		return view('backend.reward.creat');
	}

	public function addcreat(Request $request){

		$start_time 	= $request->input('start_time');
		$stop_time 		= $request->input('stop_time');
		$iphone 		= $request->input('iphone');
		$iphonep 		= $request->input('iphonep');
		$chemo 			= $request->input('chemo');
		$ipadmini 		= $request->input('ipadmini');
		$redbag 		= $request->input('redbag');
		$gouche 		= $request->input('gouche');
		
		$rotate = new Rotate;

		$rotate->start_time 	= $start_time;
		$rotate->stop_time 		= $stop_time;
		$rotate->iphone 		= $iphone;
		$rotate->iphonep 		= $iphonep;
		$rotate->chemo 			= $chemo;
		$rotate->ipadmini 		= $ipadmini;
		$rotate->redbag 		= $redbag;
		$rotate->gouche 		= $gouche;

		if($rotate->save()){
			return redirect()->route('admin.reward');
		}
 		
	}

	public function edit($id){
		$rotate = Rotate::find($id);

		return view('backend.reward.edit',['rotate'=> $rotate]);
	}

	public function addedit(Request $request){
		
		$id 			= $request->input('id');
		$start_time 	= $request->input('start_time');
		$stop_time 		= $request->input('stop_time');
		$iphone 		= $request->input('iphone');
		$iphonep 		= $request->input('iphonep');
		$chemo 			= $request->input('chemo');
		$ipadmini 		= $request->input('ipadmini');
		$redbag 		= $request->input('redbag');
		$gouche 		= $request->input('gouche');
		
		$rotate = Rotate::find($id);

		$rotate->start_time 	= $start_time;
		$rotate->stop_time 		= $stop_time;
		$rotate->iphone 		= $iphone;
		$rotate->iphonep 		= $iphonep;
		$rotate->chemo 			= $chemo;
		$rotate->ipadmini 		= $ipadmini;
		$rotate->redbag 		= $redbag;
		$rotate->gouche 		= $gouche;

		if($rotate->save()){
			return redirect()->route('admin.reward');
		}
	}

	public function dele($id){
		$rotate = Rotate::find($id);
		$rotate->delete();
		return redirect()->route('admin.reward');
	}
}
