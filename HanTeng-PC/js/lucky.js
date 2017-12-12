/**
 * 抽奖逻辑
 */

$(function () {
    var rotate = $('.rotating');  // 旋转的转盘
    var luckyTime = 4;            // 初始次数，由后台传入
    var isExecute = 0;            // 是否正在抽奖

    // 点击开始抽奖
    $(".lucky-pointer").click(function () {
        var flag = true;
        if (!flag) {
            $(".lucky-layer").show();
            $(".close-layer").on('click', function () {
                $(".lucky-layer").hide();
            });
        }
        else {
            $(".lucky-layer").hide()
            if (isExecute) return;     // 如果在执行就退出
            isExecute = true;          // 标志为 在执行
            if (luckyTime <= 0) {      // 当抽奖次数为0的时候执行
                $(".lucky-layer").show();
                $('body').css('overflow-y', 'hidden');
                $('.lucky-win-prize').show();
                $('.winner-text p').attr('class', 'sorry-text');
                $('.winner span').attr('class', '');
                $('.win-prize').html('');
                $('.share-btn').hide();
                $('.none-time').show();
                isExecute = false;
            }
            else {  // 还有次数就执行
                luckyTime = luckyTime - 1;  // 执行转盘了则次数减1
                if (luckyTime <= 0) {
                    luckyTime = 0;
                }
                luckyFn();
            }
        }
    });

    // 抽奖函数
    var luckyFn = function () {
        var data = [1, 2, 3, 4, 5, 6];   // 抽奖
        // data为随机出来的结果，根据概率后的结果
        data = data[Math.floor(Math.random() * data.length)]; // 1~6的随机数
        switch (data) {
            case 1:
                rotateFn(1, 0, '获得景区门票一张');
                break;
            case 2:
                rotateFn(2, 60, '谢谢您的参与');
                break;
            case 3:
                rotateFn(3, 120, '获得户外餐椅套装');
                break;
            case 4:
                rotateFn(4, 180, '获得车模');
                break;
            case 5:
                rotateFn(5, 240, '获得水杯');
                break;
            case 6:
                rotateFn(6, 300, '获得红包');
                break;
        }
    }

    /**
     * 旋转度数函数
     * @param awards
     * @param angle
     * @param text
     */
    var rotateFn = function (awards, angle, text) {
        isExecute = true;
        rotate.stopRotate();
        rotate.rotate({
            angle: 0,                // 旋转的角度数
            duration: 4000,          // 旋转时间
            animateTo: angle + 1440, // 给定的角度,让它根据得出来的结果加上1440度旋转
            callback: function () {
                isExecute = false;   // 标志为 执行完毕
                $('.winner-text p').attr('class', 'win-text');
                if (text === "获得景区门票一张") {
                    $('.winner span').attr('class', 'win-ticket');
                }
                else if (text === "获得红包") {
                    $('.winner span').attr('class', 'win-redpackage');
                }
                else if (text === "获得水杯") {
                    $('.winner span').attr('class', 'win-glass');
                }
                else if (text === "获得车模") {
                    $('.winner span').attr('class', 'win-carmodel');
                }
                else if (text === "获得户外餐椅套装") {
                    $('.winner span').attr('class', 'win-outdoors');
                }
                else if (text === "谢谢您的参与") {
                    $('.winner span').attr('class', 'win-thanks');
                    $('.winner-text p').attr('class', 'sorry-text');
                    $('.share-btn').hide();
                    $('.again-btn').show();
                }
                $(".win-prize").html(text);
                $(".lucky-layer").show();
                $(".lucky-win-prize").show();
                $('body').css('overflow-y', 'hidden');
                // 关闭按钮
                $(".close-layer").on('click', function () {
                    $(".lucky-layer").hide();
                    $(".lucky-win-prize").hide();
                    $('.share-btn').show();
                    $('.again-btn').hide();
                    $('body').css('overflow-y', 'auto');
                });
                // 再抽一次
                $('.again-btn').on('click', function () {
                    $(".lucky-layer").hide();
                    $(".lucky-win-prize").hide();
                    $('.share-btn').show();
                    $('.again-btn').hide();
                    $('body').css('overflow-y', 'auto');
                });
            }
        });
    };
});