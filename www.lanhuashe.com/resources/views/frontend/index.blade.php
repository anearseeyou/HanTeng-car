@extends('frontend.layouts.master')
@section('body_class')
    activity-lottery-winning
@endsection
@section('head_title')
    转动<大转盘>立即获得【汉腾汽车】5000万豪礼
@endsection()

@section('content')
<div id="index_top">
	<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
	<img src="{{asset('images/qi_jia_jie.png')}}" id="indexImg2">
	<span id="index_h3">
		<em class="em1">汉腾汽车</em><em class="em2">千万豪礼</em><br /><em class="em3">尽在转盘中</em>
	</span>
	<span id="guize">
		活动规则
	</span>
</div>

<div id="guizeCont" class="hide">
	<span id="guan">&times;</span>
	<img src="{{asset('images/new_biao_ti.png')}}" class="tit">
	<p>1.在活动期间，转盘每日不分时段运行</p>
	<p>2.转盘抽奖次数有限，每人最多4次机会。即同一顾客参与即可获取2次抽奖机会，转发到朋友圈后，还可以获得额外2次抽奖！ </p>
	<p>3.转盘奖项设置为6等，特等奖为iphone7 plus使用权，一等奖iphone7使用权，二等奖ipad mini 使用权，三等奖汉腾X7车模，四等奖购车代金券，金额分别为1000元、2000元、3000元三个档次。五等奖随机金额微信红包。</p>
	<p>4.实物奖品，将根据中奖人提交的信息统一邮寄；购车代金券为与中奖人身份信息关联的唯一数字码，购车时需提供唯一数字码验证兑现，且一人一车仅可使用一张购车代金券；红包发放将按照微信支付平台规定发放至顾客微信号。不提交信息，不关注公众号，将无法领取红包。</p>
	<p>5.本活动时间2016年12月1日-2017年3月10日，购车代金券使用有效期4个月，自中奖日起4个月内使用有效。</p>
	<p>6.本次活动面向所有人，请转发分享给身边的人，赢大礼享受钜惠！</p>
	<p>7.本次活动的最终解释权归汉腾汽车所有。</p>
</div>
    <div class="main">
        <div id="outercont">
            <div id="outer-cont">
                <div id="outer">
                    <img src="{{asset('images/activity-lottery-1.png')}}">
                </div>
            </div>
            <div id="inner-cont">
                <div id="inner">
                    <img src="{{ asset('images/activity-lottery-2.png') }}">
                </div>
            </div>

            <img src="{{ asset('images/qi_che.png') }}" class="car"/>
            
            
            
			<div class="swiper_wrap">
				<ul class="font_inner">
					<li>
						<a href="###"><span>135****4988</span>&nbsp;&nbsp;抽中&nbsp;&nbsp;<span>iPhone7</span></a>
					</li>
					<li>
						<a href="###"><span>181****3565</span>&nbsp;&nbsp;抽中&nbsp;&nbsp;<span>红包</span></a>
					</li>
					<li>
						<a href="###"><span>151****8277</span>&nbsp;&nbsp;抽中&nbsp;&nbsp;<span>iPad mini</span></a>
					</li>
					<li>
						<a href="###"><span>150****1089</span>&nbsp;&nbsp;抽中&nbsp;&nbsp;<span>iPad mini</span></a>
					</li>
				</ul>
				<!--<a href="javascript:void(0)" class="lt">&lt;</a>
				<a href="javascript:void(0)" class="gt">&gt;</a>-->
			</div>               
			
			
            <span class="listZJ">中奖名单</span>
            <div class="subBtn">开始抽奖</div>
            <a href="http://www.hantengauto.com" class="knowHT">汉腾X7<br />先睹为快</a>
        </div>

    </div>

<div class="mantle hide" id="mantle"></div>                    <!-- 遮罩-->
<div class="answer hide" data-su = '1' id="sd">                                 <!--回答问题的弹窗-->
    <img src="{{ asset('images/qi_qiu.png') }}" class="img3"/>
    <img src="{{ asset('images/biao_ti.png') }}" class="img4"/>
    <div>
        <span>1.汉腾X7的定位是什么</span>
        <select>
            <option value ="1">请选择答案</option>
			<option value ="2" id="op1" class="op">欧派大SUV</option>
			<option value ="3">欧派小SUV</option>
        </select>
    </div>
    <div>
        <span>2.汉腾X7享受几年质保</span>
        <select>
            <option value ="1">请选择答案</option>
            <option value ="2" id="op4" class="op">4年15万公里超长质保</option>
			<option value ="3">2年10万公里</option>
        </select>
    </div>
    <div>
        <span>3.汉腾X7的指导价是多少</span>
        <select>
            <option value ="1">请选择答案</option>
            <option value ="2" id="op5" class="op">7.98-14.88万</option>
			<option value ="3">19.9-29.9万</option>
        </select>
    </div>
    <button id="sub">提交</button>
</div>

<div class="answerWrong hide">
	<img src="{{ asset('images/huida_cuowu.png') }}" class="img1"/>
	<h3>回答的不对哟~</h3>
	<a href="{{ Route('frontend.ask') }}">点我悄悄告诉你答案</a>
	<button>继续回答</button>
</div>

<div class="sorryBox hide">
	<img src="{{ asset('images/tan_kuang_1.png') }}"/>
	<img src="{{ asset('images/tan_kuang_2.png') }}" class="hide"/>
	<img src="{{ asset('images/tan_kuang_3.png') }}" class="hide"/>
	<img src="{{ asset('images/guanbi_anniu.png') }}" class="close"/>
</div>


<div class="scrollDiv hide">
  <!--<h3>中奖名单</h3>-->
  <p><span>中奖号码</span><span>奖品</span></p>
  <ul class="mulitline">
    <li><span>135****4988</span><span>iPhone7</span></li>
    <li><span>151****8277</span><span>iPad mini</span></li>
    <li><span>138****8794</span><span>红包</span></li>
    <li><span>185****0203</span><span>iPhone7</span></li>
    <li><span>150****1089</span><span>iPad mini</span></li>
    <li><span>181****7845</span><span>红包</span></li>
    <li><span>139****1231</span><span>红包</span></li>
  </ul>
</div>		


@endsection()
@section('after_js')

    <script src="{{ asset('js/js.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jQueryRotate.2.2.js') }}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        var dataObj = [0, 51, 102, 153, 204, 255, 306];
        //var dataObj = [51, 51, 51, 51, 51, 51, 51];
        $(function() {

			$('#sub').click(function(){
				$('#sd').data("su",'0');
				$('.answer').addClass('hide');
			});

			$("#sub").click(function(){
	            if($("#op1").is(":selected") &&　$("#op4").is(":selected") &&　$("#op5").is(":selected")){
	                $(".answer").hide();

	                $.ajax({
	                    type:       'get',
	                    url:        "admin/wechatabout/answerright/{{$openid}}",
	                    dataType:   'json',
	                    error: function(data){
	                        console.log(data);
	                    },
	                    success:function(json){
	                        console.log(json);
	                    }
	                })

	            }else{
	                $(".answerWrong").show();
	                $.ajax({
	                    type:       'get',
	                    url:        "admin/wechatabout/answernum/{{$openid}}",
	                    dataType:   'json',
	                    error: function(data){
	                        console.log(data);
	                    },
	                    success:function(json){
	                        console.log(json);
	                    }
	                })
	            }
	        })

	        $(".answerWrong button").click(function(){
				$(".answerWrong").hide();
				$(".answer").show();
			})

            var rotating = false;
            var rotateFunc = function(num, type,id) {

                rotating = true;
                $("#outer").rotate({
                	angle: 0,
                    duration: 3000,
                    animateTo: num + 1440,
                    callback: function() {
                        rotating = false;

                        if (type == 0) {
			                
			                $.ajax({//iphonep
                        		type:'get',
                        		url: "/admin/wechatabout/updateinfopost/{{$openid}}/0",
                        		dataType:'json',
                        		success:function(json){
                        			$.ajax({
			                			type:'get',
			                    		url: "/admin/rewardabout/get/1/iphonep",
			                    		dataType:'json',
			                    		success:function(data){
			                    			window.location.href = "{{ url('reward/0/0') }}/"+id;
			                    		}
		                    		})
                        		}
                        	})
                        	
                        }else if (type == 1) {
							$.ajax({
                        		type:'get',
                        		url: "/admin/wechatabout/updateinfopost/{{$openid}}/1",
                        		dataType:'json',
                        		success:function(json){
                        			console.log(json);
                        			$("#mantle").show();
									$(".sorryBox").show(
										function(){
											$(".close").click(function(){
												$("#mantle").hide();
												$(".sorryBox").hide();
												window.location.reload();
											})
										}
									);
                        		}
                        	})
                        }else if (type == 2) {//gouche
                        	
                        	$.ajax({
                        		type:'get',
                        		url: "/admin/wechatabout/updateinfopost/{{$openid}}/2",
                        		dataType:'json',
                        		success:function(json){
                        			$.ajax({
		                        		type:'get',
		                        		url: "admin/rewardabout/rand/",
		                        		dataType:'json',
		                        		success:function(json){
		                        			json = 1;
		                        			if(json ==1){
		                        				$.ajax({
						                			type:'get',
						                    		url: "/admin/rewardabout/get/1/gouche",
						                    		dataType:'json',
						                    		success:function(data){
						                    			window.location.href = "{{ url('reward/2/1') }}/"+id;
						                    		}
					                    		})
		                        				
		                        			}else if(json ==2){
		                        				$.ajax({
						                			type:'get',
						                    		url: "/admin/rewardabout/get/1/gouche",
						                    		dataType:'json',
						                    		success:function(data){
						                    			window.location.href = "{{ url('reward/2/2') }}/"+id;
						                    		}
					                    		})
		                        				
		                        			}else{
		                        				$.ajax({
						                			type:'get',
						                    		url: "/admin/rewardabout/get/1/gouche",
						                    		dataType:'json',
						                    		success:function(data){
						                    			window.location.href = "{{ url('reward/2/3') }}/"+id;
						                    		}
					                    		})
		                        				
		                        			}
		                        		}
		                        	})
                        		}
                        	})

                        }else if (type == 3) {//redbag
                        	$.ajax({
                        		type:'get',
                        		url: "/admin/wechatabout/updateinfopost/{{$openid}}/3",
                        		dataType:'json',
                        		success:function(json){
                        			$.ajax({
			                			type:'get',
			                    		url: "/admin/rewardabout/get/1/redbag",
			                    		dataType:'json',
			                    		success:function(data){
			                    			window.location.href = "{{ url('reward/3/0') }}/"+id;
			                    		}
		                    		})
                        		}
                        	})
                        	
                        }else if (type == 4) {//ipadmini
			                
			                $.ajax({
                        		type:'get',
                        		url: "/admin/wechatabout/updateinfopost/{{$openid}}/4",
                        		dataType:'json',
                        		success:function(json){
                        			$.ajax({
			                			type:'get',
			                    		url: "/admin/rewardabout/get/1/ipadmini",
			                    		dataType:'json',
			                    		success:function(data){
			                    			window.location.href = "{{ url('reward/4/0') }}/"+id;
			                    		}
		                    		})
                        		}
                        	})
                        	
                        }else if (type == 5) {//chemo
							
							$.ajax({
                        		type:'get',
                        		url: "/admin/wechatabout/updateinfopost/{{$openid}}/5",
                        		dataType:'json',
                        		success:function(json){
                        			$.ajax({
			                			type:'get',
			                    		url: "/admin/rewardabout/get/1/chemo",
			                    		dataType:'json',
			                    		success:function(data){
			                    			window.location.href = "{{ url('reward/5/0') }}/"+id;
			                    		}
		                    		})
                        			
                        		}
                        	})
                        	
                        }else if (type == 6) {/*iphone*/
			                $.ajax({
                        		type:'get',
                        		url: "/admin/wechatabout/updateinfopost/{{$openid}}/6",
                        		dataType:'json',
                        		success:function(json){
                        			$.ajax({
			                			type:'get',
			                    		url: "/admin/rewardabout/get/1/iphone",
			                    		dataType:'json',
			                    		success:function(data){
			                    			window.location.href = "{{ url('reward/6/0') }}/"+id;
			                    		}
		                    		})
                        		}
                        	})
                        	
                        }
                    }
                });
            };


            $("#inner").on("click", function() {
            	var allow = {{ $allow }};

            	console.log(allow);
            	if(allow == 1){
            		$.ajax({/*判断回答是否正确*/
	            		type:       'get',
	                    url:        "admin/wechatabout/getanswerright/{{$openid}}",
	                    dataType:   'json',
	                    error: function(data){
	                        console.log(data);
	                    },
	                    success:function(json){
	                    	console.log('回答是否正确标识',json);
	                       if(json == 0){/*回答错误*/
								$('.answer').removeClass('hide');
	                       	}else{/*回答正确*/
	                       		$.ajax({/*获取用户信息*/
				                    type:       'get',
						            url:        "admin/wechatabout/getuserinfo/{{$openid}}",
				                    dataType:   'json',
				                    success:function(json2){
				                    	if(json2 == 0){/*只能抽谢谢*/
				                    		!rotating && rotateFunc(51,1);
				                    	}else{/*可以抽其他的奖*/
				                    		$.ajax({
							            		type:       'get',
							                    url:        "admin/rewardabout/set/{{$openid}}",
							                    dataType:   'json',
							                    success:function(json){
							                    	if(json.yz){
							                    		var arr =new Array();
							                    		var dan= 0;
								                    	$.each(json.yz,function(name,value) {
								                    		
															if(value>0 && name != 'id'){
																if(name == 'iphone'){
																	var na = 6;
																}else if(name == 'iphonep'){
																	var na = 0;
																}else if(name == 'ipadmini'){
																	var na = 4;
																}else if(name == 'chemo'){
																	var na = 5;
																}else if(name == 'redbag'){
																	var na = 3;
																}else if(name == 'gouche'){
																	var na = 2;
																}

																arr[dan] = na;

																dan++;
															}
															
														});
														arr.push(1);

								                    	var key = sendNum(arr);

														!rotating && rotateFunc(dataObj[key],key,json.yz.id);
								                    }else{
														!rotating && rotateFunc(json.sum,json.type);
								                    }
							                    }
							            	})
				                    	}
				                    }
				                })
	                       	}
	                    }
	            	})	
            	}else{
            		alert('分享到朋友圈还可获得两次抽奖机会（多次分享无效）');
            	}
            	
            });


            $(".subBtn").on("click", function() {
				var allow = {{ $allow }};
            	if(allow == 1){
            		$.ajax({/*判断回答是否正确*/
	            		type:       'get',
	                    url:        "admin/wechatabout/getanswerright/{{$openid}}",
	                    dataType:   'json',
	                    error: function(data){
	                        console.log(data);
	                    },
	                    success:function(json){
	                       if(json == 0){
								$('.answer').removeClass('hide');
	                       	}else{
	                       		$.ajax({/*获取用户中奖信息*/
				                    type:       'get',
						            url:        "admin/wechatabout/getuserinfo/{{$openid}}",
				                    dataType:   'json',
				                    success:function(json2){
				                    	if(json2 == 0){
				                    		!rotating && rotateFunc(51,1);
				                    	}else{
				                    		$.ajax({
							            		type:       'get',
							                    url:        "admin/rewardabout/set/{{$openid}}",
							                    dataType:   'json',
							                    success:function(json){
							                    	if(json.yz){
							                    		var arr =new Array();
							                    		var dan= 0;
								                    	$.each(json.yz,function(name,value) {
								                    		
															if(value>0 && name != 'id'){
																if(name == 'iphone'){
																	var na = 6;
																}else if(name == 'iphonep'){
																	var na = 0;
																}else if(name == 'ipadmini'){
																	var na = 4;
																}else if(name == 'chemo'){
																	var na = 5;
																}else if(name == 'redbag'){
																	var na = 3;
																}else if(name == 'gouche'){
																	var na = 2;
																}

																arr[dan] = na;

																dan++;
															}
															
														});
														arr.push(1);

								                    	var key = sendNum(arr);

														!rotating && rotateFunc(dataObj[key],key,json.yz.id);
								                    }else{
														!rotating && rotateFunc(json.sum,json.type);
								                    }
							                    }
							            	})
				                    	}
				                    }
				                })
	                       	}
	                    }
	            	})	
            	}else{
            		alert('分享到朋友圈还可获得两次抽奖机会（多次分享无效）');
            	}

            	
        	})
        	function sendNum(arr){
		    	return arr[Math.floor(Math.random()*arr.length)];
			}

			$('.listZJ').click(function(){
				$('.scrollDiv').removeClass('hide');
			})
			$('.scrollDiv').click(function(){
				$(this).addClass('hide');
			})

			$("#guize").on("click", function() {
				$('#guizeCont').removeClass('hide');
            });
            $("#guan").on("click", function() {
				$('#guizeCont').addClass('hide');
            });
		})
    </script>
    
    
	<script type="text/javascript">
	$(function(){
	
	$(".font_inner li:eq(0)").clone(true).appendTo($(".font_inner"));//克隆第一个放到最后(实现无缝滚动)
	var liHeight = $(".swiper_wrap").height();//一个li的高度
	//获取li的总高度再减去一个li的高度(再减一个Li是因为克隆了多出了一个Li的高度)
	var totalHeight = ($(".font_inner li").length *  $(".font_inner li").eq(0).height()) -liHeight;
	$(".font_inner").height(totalHeight);//给ul赋值高度
	var index = 0;
	var autoTimer = 0;//全局变量目的实现左右点击同步
	var clickEndFlag = true; //设置每张走完才能再点击

	function tab(){
		$(".font_inner").stop().animate({
			top: -index * liHeight
		},400,function(){
			clickEndFlag = true;//图片走完才会true
			if(index == $(".font_inner li").length -1) {
				$(".font_inner").css({top:0});
				index = 0;
			}
		})
	}

	function next() {
		index++;
		if(index > $(".font_inner li").length - 1) {//判断index为最后一个Li时index为0
			index = 0;
		}
		tab();
	}
	function prev() {
		index--;
		if(index < 0) {
			index = $(".font_inner li").size() - 2;//因为index的0 == 第一个Li，减二是因为一开始就克隆了一个LI在尾部也就是多出了一个Li，减二也就是_index = Li的长度减二
			$(".font_inner").css("top",- ($(".font_inner li").size() -1) * liHeight);//当_index为-1时执行这条，也就是走到li的最后一个
		}
		tab();
	}
/*	//切换到下一张
	$(".swiper_wrap .gt").on("click",function() {
		if(clickEndFlag) {
			next();
			clickEndFlag = false;
		}
	});
	//切换到上一张
	$(".swiper_wrap .lt").on("click",function() {
		if(clickEndFlag) {
			prev();
			clickEndFlag = false;
		}
	});*/
	//自动轮播
	autoTimer = setInterval(next,2000);
	$(".font_inner a").hover(function(){
		clearInterval(autoTimer);
	},function() {
		autoTimer = setInterval(next,2000);
	})

	//鼠标放到左右方向时关闭定时器
	$(".swiper_wrap .lt,.swiper_wrap .gt").hover(function(){
		clearInterval(autoTimer);
	},function(){
		autoTimer = setInterval(next,2000);
	})
	//1文字轮播(2-5页中间)结束
	})
	</script>    
	
	<script type="text/javascript">
		$(function(){
		    //单行应用
		    var _wrap=$('ul.line');//定义滚动区域
		    var _interval=1500;//定义滚动间隙时间
		    var _moving;//需要清除的动画
		    _wrap.hover(function(){
		        clearInterval(_moving);//当鼠标在滚动区域中时,停止滚动
		    },function(){
		        _moving=setInterval(function(){
		            var _field=_wrap.find('li:first');//此变量不可放置于函数起始处,li:first取值是变化的
		            var _h=_field.height();//取得每次滚动高度
		            _field.animate({marginTop:-_h+'px'},600,function(){//通过取负margin值,隐藏第一行
		                _field.css('marginTop',0).appendTo(_wrap);//隐藏后,将该行的margin值置零,并插入到最后,实现无缝滚动
		            })
		        },_interval)//滚动间隔时间取决于_interval
		    }).trigger('mouseleave');//函数载入时,模拟执行mouseleave,即自动滚动
		});
		$(function(){
		    //多行应用
		    var _wrap=$('ul.mulitline');//定义滚动区域
		    var _interval=1500;//定义滚动间隙时间
		    var _moving;//需要清除的动画
		    _wrap.hover(function(){
		        clearInterval(_moving);//当鼠标在滚动区域中时,停止滚动
		    },function(){
		        _moving=setInterval(function(){
		            var _field=_wrap.find('li:first');//此变量不可放置于函数起始处,li:first取值是变化的
		            var _h=_field.height();//取得每次滚动高度
		            _field.animate({marginTop:-_h+'px'},600,function(){//通过取负margin值,隐藏第一行
		                _field.css('marginTop',0).appendTo(_wrap);//隐藏后,将该行的margin值置零,并插入到最后,实现无缝滚动
		            })
		        },_interval)//滚动间隔时间取决于_interval
		    }).trigger('mouseleave');//函数载入时,模拟执行mouseleave,即自动滚动
		});	
		
	</script> 
@stop()