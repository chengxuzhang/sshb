<?php

use frontend\components\Html;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/zj-mobile.css") ?>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=<?= CacheConfig::getConfigCache("mapkey") ?>"></script>

<div class="page">
    <div class="weui-form">
        <div class="weui-form__text-area">
            <div class="weui-form__desc zj-mobile__flex-img">
                <img src="/m-images/cloud_title.png" alt="" style="width:100%;height:auto;">
            </div>
        </div>
        <div class="weui-form__control-area">
            <div class="weui-cells__group weui-cells__group_form">
                <div class="weui-cells weui-cells_form">
                    <div class="weui-cell zj-mobile__input weui-cell_vcode">
                        <div class="weui-cell__hd" id="showPhone"><label class="weui-label">+86</label></div>
                        <div class="weui-cell__bd weui-cell_primary zj-mobile__line">
                            <input id="js_input_mobile" class="weui-input" placeholder="输入您的手机号" type="text"/>
                        </div>
                    </div>
                    <div class="weui-cell zj-mobile__input weui-cell_vcode">
                        <div class="weui-cell__hd"><label class="weui-label"></label></div>
                        <div class="weui-cell__bd weui-cell_primary">
                            <input id="js_input_code" class="weui-input" placeholder="输入验证码" type="number" pattern="[0-9]*"/>
                            <a class="zj-mobile__btn_msg" href="javascript:void(0);" id="mobileMsg">短信验证</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weui-cell zj-mobile__select-title">您的身份是？</div>
            <div class="weui-cell zj-mobile__select-list">
                <ul>
                    <li data-type="sjs"><div class="zj-mobile__select_sjs">设计师<i>√</i></div></li>
                    <li data-type="fz" class="active"><div class="zj-mobile__select_fz">房主<i>√</i></div></li>
                    <li data-type="xs"><div class="zj-mobile__select_xs">销售<i>√</i></div></li>
                </ul>
            </div>
        </div>
        <div class="weui-form__tips-area">
            <a class="weui-btn weui-btn_primary weui-btn_disabled zj-mobile__btn_primary" href="javascript:" id="showTooltips">确定</a>
        </div>
        <div class="weui-footer">
            <img src="/m-images/cloud_logo.png" alt="" style="width:23%;height:auto;">
        </div>
        <div class="weui-form__tips-area"></div>
    </div>
</div>
<div class="zj-mobile__cover" id="zj-mobile__cover">
    <img src="/m-images/house.png" id="zj-mobile__cover-img" alt="" style="width:100%;height:auto;">
</div>
<script type="text/javascript">
    $(function(){
        var currentCity = "";
        var $code = $('#js_input_code');
        var $mobile = $('#js_input_mobile');
        var sfz = "fz";
        var currentUrl = "<?= Yii::$app->request->get("url"); ?>";
        $mobile.on('input', function(){
            if ($mobile.val() && isPoneAvailable($mobile.val())){
                $('#showTooltips').removeClass('weui-btn_disabled');
            }else{
                $('#showTooltips').addClass('weui-btn_disabled');
            }
        });

        $('#showTooltips').on('click', function(){
            if ($(this).hasClass('weui-btn_disabled')){
                $.toast("请输入手机号！", "forbidden");
                return;
            }
            if(sfz === null){
                $.toast("请选择您的身份！", "forbidden");
                return;
            }
            $('.page.cell').removeClass('slideIn');
            $.showLoading();
            $.post("/cloud/mobile/api", {"url":currentUrl, "mobile":$mobile.val(), "city": currentCity, "name": sfz, "code": $code.val()}, function (result) {
                $.hideLoading();
                if(result.status == 200){
                    $.toast(result.msg, function () {
                        window.location.href = "/cloud/vr.html?url=" + currentUrl;
                    });
                }else{
                    $.toast(result.msg, "forbidden");
                }
            })
        });

        function getLocation() {
            //根据IP获取城市
            var myCity = new BMap.LocalCity();
            myCity.get(getCityByIP);
        }

        //根据IP获取城市
        function getCityByIP(rs) {
            var cityName = rs.name;
            currentCity = cityName;
        }

        getLocation(); // 获取当前城市名称

        // 验证手机号码
        function isPoneAvailable($poneInput) {
            var myreg=/^[1][3,4,5,7,8][0-9]{9}$/; // 国内手机号
            var hongkong = /^[5689]{1}\d{7}$/; // 香港手机号
            if (!myreg.test($poneInput) && !hongkong.test($poneInput)) {
                return false;
            } else {
                return true;
            }
        }

        var area = 86;
        $("#showPhone").click(function () {
            var _this = $(this).find("label");
            weui.picker([{
                label: '+86 中国',
                value: 86
            }, {
                label: '+852 中国香港',
                value: 852
            }, {
                label: '+853 中国澳门',
                value: 853
            }, {
                label: '+886 中国台湾',
                value: 886
            }], {
                onConfirm: function (result) {
                    area = result[0].value;
                    _this.html("+" + area);
                },
                title: '选择国家或地区'
            });
        })

        var is_send = false;
        $("#mobileMsg").click(function () {
            if ($("#showTooltips").hasClass('weui-btn_disabled')){
                $.toast("请输入手机号！", "forbidden");
                return;
            }
            if(!is_send){
                is_send = true;
                var _this = $(this);
                var time = 60;
                _this.html(time + "s");
                var timer = setInterval(function () {
                    time--;
                    if(time<=0){
                        clearInterval(timer);
                        is_send = false;
                        _this.html("重新发送");
                    }else{
                        _this.html(time + "s");
                    }
                },1000);

                $.get("/cloud/message/api", {"mobile": $mobile.val(), "area": area}, function (res) {
                    // 发送手机验证码
                })
            }
            return false;
        })

        $(".zj-mobile__select-list ul li").click(function () {
            $(".zj-mobile__select-list ul li").each(function (k, v) {
                $(v).removeClass("active");
            });
            $(this).addClass("active");
            sfz = $(this).data("type");
        })

        function house_position() {
            var h = $(".page").height();
            var w = $(".page").width();
            var imgH = w * 944 / 719;
            var mt = (h - imgH) / 2;
            $("#zj-mobile__cover-img").css({"margin-top":mt + "px"});
        }
        house_position();

        $("#zj-mobile__cover-img").click(function () {
            $("#zj-mobile__cover").hide();
        })
    });
</script>

