@extends('frontend.layouts.master')
@section('body_class')
@endsection
@section('head_title')
    汉腾问答页面
@endsection
@section('content')
    <div class="ask">
        <div class="askTop">
            <img src="{{ asset('images/logo.png') }}" class="askTopimg1"/>
            <img src="{{ asset('images/ou_pai.png') }}" class="askTopimg2"/>
        </div>

        <!--scroll-->
        <div class="scroll">
            <div class="scroll_box" id="scroll_img">
                <ul class="scroll_wrap">
                    <li><a href="###"><img src="{{ asset('images/lun_bo_tu_1.jpg') }}" width="100%" /></a></li>
                    <li><a href="###"><img src="{{ asset('images/lun_bo_tu_2.jpg') }}" width="100%" /></a></li>
                    <li><a href="###"><img src="{{ asset('images/lun_bo_tu_3.jpg') }}" width="100%" /></a></li>
                </ul>
            </div>
            <ul class="scroll_position" id='scroll_position'>
                <li class="on"><a href="javascript:void(0);">1</a></li>
                <li><a href="javascript:void(0);">2</a></li>
                <li><a href="javascript:void(0);">3</a></li>
            </ul>
        </div>
        <!--scroll-->

        <div class="askCont">
            <!--<div class="askContBtn">
                <button class="askContBtn1">1.5T手动</button>
                <button class="askContBtn2">2.0T自动</button>
            </div>-->
            <div class="askB">
                <div class="bg_bai">
                    <h4>汉腾X7参数</h4>
                </div>
                <div>
                    <span class="fl">定位</span>
                    <img class="fr" src="{{ asset('images/ou_pai.png') }}"/>
                </div>
                <div class="bg_bai">
                    <span class="fl">轴距</span>
                    <span class="fr">2810</span>
                </div>
                <div>
                    <span class="fl">车宽</span>
                    <span class="fr">1.9米</span>
                </div>
                <div class="bg_bai">
                    <span class="fl">车身结构</span>
                    <span class="fr">5门5座SUV</span>
                </div>
                <div>
                    <span class="fl">中控屏</span>
                    <span class="fr">9寸彩色</span>
                </div>
                <div class="bg_bai">
                    <span class="fl">享受几年质保</span>
                    <span class="fr">4年15万公里</span>
                </div>
                <div>
                    <span class="fl">指导价</span>
                    <span class="fr">7.98-14.88万元</span>
                </div>
                <!--<div class="bg_bai">
                    <span class="fl">百公里油耗</span>
                    <span class="fr askContBtn1_change">7.9</span>
                </div>-->
                <div class="bg_bai">
                    <span class="fl">行李箱容积</span>
                    <span class="fr">344（L）</span>
                </div>
                <!--<div class="bg_bai">
                    <span class="fl">最大功率(Kw/rpm)</span>
                    <span class="fr askContBtn2_change">109.8/5500</span>
                </div>-->
            </div>
            <a href="/">去答题抽奖</a>
        </div>
    </div>
@endsection
@section('after_js')
    <script src="{{ asset("js/hhSwipe.js") }}"></script>
    <script>
        var slider = Swipe(document.getElementById('scroll_img'), {
            auto: 2000,
            continuous: true,
            callback: function(pos) {
                var i = bullets.length;
                while (i--) {
                    bullets[i].className = ' ';
                }
                bullets[pos].className = 'on';
            }
        });
        var bullets = document.getElementById('scroll_position').getElementsByTagName('li');
        $(function(){
            $('.scroll_position_bg').css({
                width:$('#scroll_position').width()
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(".askContBtn2").click(function(){
                $(".askContBtn2_change").text("140/5500");
                $(".askContBtn1_change").text("8.8");
				$(".askContBtn1").css({"background":"0","border":"1px solid #fff","box-shadow":"inset 0 0 3px #ccc","color":"#000"})
				$(".askContBtn2").css({"background":"#3D3D3D","border":"1px solid #000","box-shadow":"inset 0 0 3px #666","color":"#fff"})
            })
            $(".askContBtn1").click(function(){
                $(".askContBtn2_change").text("109.8/5500");
                $(".askContBtn1_change").text("7.9");
                $(".askContBtn2").css({"background":"0","border":"1px solid #fff","box-shadow":"inset 0 0 3px #ccc","color":"#000"})
				$(".askContBtn1").css({"background":"#3D3D3D","border":"1px solid #000","box-shadow":"inset 0 0 3px #666","color":"#fff"})
            })
        })
    </script>
@stop