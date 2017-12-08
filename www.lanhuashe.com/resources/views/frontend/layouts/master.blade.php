<!DOCTYPE html>
<html class="minH110">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <title>
            转动<大转盘>立即获得【汉腾汽车】5000万豪礼
        </title>
        <link rel="stylesheet" href="{{asset('css/activity-style.css')}}">
        @yield('after_css')
        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
            wx.config({!! $js->config(array('onMenuShareTimeline'), false) !!});
            wx.ready(function(){
                wx.onMenuShareTimeline({
                    title:  '转动<大转盘>立即获得【汉腾汽车】5000万豪礼', 
                    link:   'www.lanhuashe.com', 
                    imgUrl: '{{asset('images/activity-lottery-1.png')}}', 
                    success: function () {
                        $.ajax({
                            type:       'get',
                            url:        "/admin/wechatabout/share/{{$openid}}",
                            dataType:   'json',
                            error: function(data){
                                console.log(data);
                            },
                            success:function(json){
                               window.location.href = "{{ url('/') }}";
                            }
                        }) 
                    },
                    cancel: function () {
                        alert('您取消了分享，将不再享有再次抽奖的机会');
                    }
                });
            });
            wx.error(function(res){
                console.log('微信js-sdk配置错误！请查找原因。');
            });
        </script>
    </head>

    <body class="@yield('body_class')">
        @yield('content')

        <script src="{{ asset('js/jquery-1.8.1.min.js') }}" type="text/javascript"></script>
        @yield('after_js')
    </body>
</html>