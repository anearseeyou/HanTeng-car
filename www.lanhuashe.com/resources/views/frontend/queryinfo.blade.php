@extends('frontend.layouts.master')
@section('body_class')
	activity-lottery-winning minH110
@endsection

@section('content')
	<div class="subPrize" id="subPrize">
		@if($sec > 0)
			<img src='{{ asset("images/biao_ti2_$sec.png") }}' class="img5"/>
		@else
			<img src='{{ asset("images/biao_ti_$num.png") }}' class="img5"/>
		@endif
		<p>请填写您的具体联系方式</p>
		<p>方便我们把礼品邮寄给您</p>
		@if($num == 3)
			<div class="marT">
				<span class="jianju">微信</span>
				<input type="text" name="watch" id="watch" value="" />
			</div>
			<input type="hidden" name="reward" id ="reward" value="{{$num}}">
			<input type="hidden" name="openid" id ="openid" value="{{$openid}}">
		@else
			<div class="marT">
				<span class="jianju">姓名</span>
				<input type="text" name="name" id="name" value="" />
			</div>
			<div>
				<span>电话号码</span>
				<input type="text" name="tel" id="tel" value="" />
			</div>
			<div>
				<span class="jianju">微信</span>
				<input type="text" name="watch" id="watch" value="" />
			</div>
			<div>
				<span>具体地址</span>
				<input type="text" name="adder" id="adder" value="" />
				<input type="hidden" name="reward" id ="reward" value="{{$num}}">
				<input type="hidden" name="openid" id ="openid" value="{{$openid}}">
			</div>
		@endif
		<button id="sub">提交</button>

	</div>
	<div class="subSuc hide">                                <!--提交成功的弹窗-->
		<img src="{{ asset('images/ti_shi.png') }}" class="img1"/>
		<h3>提交成功！</h3>
		<img src="{{ asset('images/subSuc.png') }}" class="img2"/>
		<button id="share_btu">立即分享</button>

	</div>
	<iframe src="" id="as"></iframe>

@endsection
@section('after_js')

	<script>
		$(function() {

			$('#share_btu').click(function(){

				$('.subSuc').addClass('hide');

				alert('请点击右上角分享按钮！');

				window.location.href = "{{ url('/') }}";
			})

			$('#sub').click(function(){
				if($('#reward').val() == 3){
					if($("#watch").val() == ''){
						alert('请填写微信号！');
						return false;
					}else{
						$.ajax({
							type: 'get',
		                    url:  "/admin/wechatabout/updateinfo/"+'红包未填写'+'/'+'红包未填写 '+'/'+$('#watch').val()+'/'+'红包未填写'+'/'+$('#reward').val()+'/'+$('#openid').val()+'/{{$sec}}',
		   					dataType: 'json',
		                    error: function(datas){
		                        alert('提交失败，可能是您填写不全！');
		                    },
		                    success:function(json){
                    			$.ajax({/*发送红包*/
		                    		type:'post',
		                    		url: "/admin/gongzuoshijianqianduanhuashiza8610/",
		                    		data:{ openid:"{{$openid}}", num:"{{$num}}" },
		                    		dataType:'json',
		                    		success:function(data){
		                    			if(data == 0){
		                    				alert('已经参与过了！解释权归汉腾所有！');
		                    				window.location.href='/';
		                    			}else if(data == 2){
		                    				alert('非法状态！');
		                    				window.location.href='/';
		                    			}else{
		                    				alert('红包已发送至您的微信账号！');
		                    				$('.subSuc').removeClass('hide');
		                    			}
		                    		}
	                    		})
		                    }
		                })
					}
			}else{
				if($("#name").val() == ''){
					alert('请填写正确姓名！');
					return false;
				}
				if($("#tel").val() == ''){
					alert('手机号码不能为空！');
					return false;
				}else if(checkPhone($("#tel").val()) == false){
					alert('手机格式不正确！');
					return false;
				}
				if($("#watch").val() == ''){
					alert('请填写微信号！');
					return false;
				}
				if($("#adder").val() == ''){
					alert('请填写地址！');
					return false;
				}

				$.ajax({
					type: 'get',
                    url:  "/admin/wechatabout/updateinfo/"+$('#name').val()+'/'+$('#tel').val()+'/'+$('#watch').val()+'/'+$('#adder').val()+'/'+$('#reward').val()+'/'+$('#openid').val()+'/{{$sec}}',
   					dataType: 'json',
                    error: function(datas){
                        alert('提交失败，可能是您填写不全！');
                    },
                    success:function(json){
                    	if($('#reward').val() == 0){
							var types = 'iphonep';
						}else if($('#reward').val() == 2){
							var types = 'gouche';
						}else if($('#reward').val() == 4){
							var types = 'ipadmini';
						}else if($('#reward').val() == 5){
							var types = 'chemo';
						}else if($('#reward').val() == 6){
							var types = 'iphone';
						}

     					if($('#reward').val() == 4){
     						$.ajax({/*发送红包*/
	                    		type:'post',
	                    		url: "/admin/gongzuoshijianqianduanhuashis/",
	                    		data:{ openid:"{{$openid}}", num:"{{$num}}" },
	                    		dataType:'json',
	                    		success:function(data){
	                    			if(data == 0){
	                    				alert('已经参与过了！解释权归汉腾所有！');
	                    				window.location.href='/';
	                    			}else if(data == 2){
	                    				alert('非法状态！');
	                    				window.location.href='/';
	                    			}else{
	                    				alert('我们会尽快邮寄奖品，请注意查收！');
	                    				$('.subSuc').removeClass('hide');
	                    			}
	                    		}
                    		})
     					}else if($('#reward').val() == 2){
		        			$.ajax({
								type: 'post',
				                url:  "/admin/wechat/creatqrcode",
				                data: {openid:"{{$openid}}",esc:"{{$sec}}"},
				   				dataType: 'json',
				                error: function(datas){
				                    console.log(datas);
				               	},
				                success:function(json){
				                	if(json == 0){
				                		alert('您已经参与过了！');
				                		window.location.href='/';
				                	}else if(json == 2){
				                		alert('不正常操作，或您已经参与过了！');
				                		window.location.href='/';
				                	}else{
				                		$.ajax({
					                   		type: 'post',
					                		url:  "/admin/wechat/creatticket",
					                		data: {ticket:json.ticket},
					   						dataType: 'json',
					   						success:function(data){
					   							//console.log(data); 
					   							alert('系统将会给您发送二维码，“长按二维码”>>选择>>识别二维码，即可领取相应代金券到您的“我”->“卡包”->“我的票券”中');
					   							$('#as').show();
					   							window.location.href=data;
					   							//$('#as').attr('src',data);
					   							$('.subSuc').removeClass('hide');
					   						}
					                   })
				                	}
				                }
				            })
                    	}else{
                			alert('我们会尽快邮寄奖品，请注意查收！');
                			$('.subSuc').removeClass('hide');
                    	}
	                    }
					});
				}
			})
		})

		function checkPhone(phone){
		    if(!(/^1(3|4|5|7|8)\d{9}$/.test(phone))){
		        return false;
		    }
		}
	</script>
@stop
