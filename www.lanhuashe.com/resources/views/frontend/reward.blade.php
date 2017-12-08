@extends('frontend.layouts.master')
@section('body_class')
@endsection
@section('content')
	@if($num == 0)
		<div class="bgPrize">
		<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
			<h2>获 得</h2>
			<h3>iPhone 7 PLUS</h3>
			<img src="{{ asset('images/iphone_7plus.png') }}" class="img_7plus"/>
			<button>点击领取</button>
		</div>
	@elseif($num == 2)

		@if($sec == 1)
			<div class="bgPrize">
			<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
				<h2>获 得</h2>
				<h3>购车券 1000</h3>
				<h5>*详情咨询当地经销商</h5>
				<img src="{{ asset('images/1000_juan.png') }}" class="img_1000"/>
				<button>点击领取</button>
			</div>
		@elseif($sec == 2)
			<div class="bgPrize">
			<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
				<h2>获 得</h2>
				<h3>购车券 2000</h3>
				<h5>*详情咨询当地经销商</h5>
				<img src="{{ asset('images/2000_juan.png') }}" class="img_1000"/>
				<button>点击领取</button>
			</div>
		@elseif($sec == 3)
			<div class="bgPrize">
			<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
				<h2>获 得</h2>
				<h3>购车券 3000</h3>
				<h5>*详情咨询当地经销商</h5>
				<img src="{{ asset('images/3000_juan.png') }}" class="img_1000"/>
				<button>点击领取</button>
			</div>
		@endif

	@elseif($num == 3)
		<div class="bgPrize">
		<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
			<h2>获 得</h2>
			<h3>红包</h3>
			<img src="{{ asset('images/hong_bao.png') }}" class="img_hongbao"/>
			<button class="redbag">点击领取</button>
		</div>
	@elseif($num == 4)
		<div class="bgPrize">
		<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
			<h2>获 得 </h2>
			<h3>iPad mini</h3>
			<img src="{{ asset('images/mini_pad.png') }}" class="img_pad"/>
			<button>点击领取</button>
		</div>
	@elseif($num == 5)

		<div class="bgPrize">
			<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
			<h2>获 得</h2>
			<h3>汉腾X7车模</h3>
			<img src="{{ asset('images/da_qi_che.png') }}" class="img_pro"/>
			<button>点击领取</button>
		</div>
	@elseif($num == 6)
		<div class="bgPrize">
		<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
			<h2>获 得</h2>
			<h3>iPhone 7</h3>
			<img src="{{ asset('images/iphone7.png') }}" class="img_7"/>
			<button>点击领取</button>
		</div>
	@else
		<div class="bgPrize">
		<img src="{{asset('images/logo_new.png')}}" class="indexImg1">
			<h2>发生错误！</h2>
		</div>
	@endif
	<input type="hidden" name="uid" id="uid" value="{{$openid}}">
@endsection
@section('after_js')
	<script>
		$(document).ready(function(){
			$(".bgPrize button").click(function(){
				$.ajax({
					type:'GET',
					url:'/rewarded/{{$num}}/{{$openid}}',
					dataType:'json',
					success:function(data){
						if(data == 0){
							alert('您已经点击过了');
							window.location.href = '/';
						}else{
							window.location.href = '{{ url("query/$num/$sec/$id") }}';	
						}
					}
				})
					
			})
		})
	</script>
@stop