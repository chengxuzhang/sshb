<?php

use frontend\components\Html;
use frontend\components\CacheConfig;

$this->title = $title;
?>
<?php echo Html::cssFile("@web/css/zj-mobile-offer.css"); ?>
<style>
.weui-switch, .weui-switch-cp__box{
    width: 42px;
    height: 14px;
    border: none;
    background-color: #E6E5EF;
}
.weui-switch:before, .weui-switch-cp__box:before{
	background-color: #E6E5EF;
}
.weui-switch:after, .weui-switch-cp__box:after{
	width:24px;
	height:24px;
	top:-5px;
}
.weui-switch:checked, .weui-switch-cp__input:checked ~ .weui-switch-cp__box:after{
    background-color: #4255C2;
}
.weui-switch:after, .weui-switch-cp__box:after{
	background-color: #CCCCCC;
}
.weui-switch:checked, .weui-switch-cp__input:checked ~ .weui-switch-cp__box{
	background-color: #E6E5EF;
}
.weui-form__control-area {
    -webkit-box-flex: .3;
    -webkit-flex: .3;
    flex: .3;
    margin: 90px 0;
}
.weui-cells:before{
	border-top: none;
}
.weui-cells__group_form .weui-cells__tips{
	margin-top: 20px;
}
</style>

<div class="page">
  <div class="weui-form">
  	<div class="weui-cell"></div>
    <div class="weui-form__text-area">
      <h2 class="weui-form__title zj-mobile__title">欢迎登录</h2>
    </div>
    <div class="weui-form__control-area">
      <div class="weui-cells__group weui-cells__group_form">
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd">
					<i class="zj-mobile__icon_1"></i>
                </div>
                <div class="weui-cell__bd">
                    <input autofocus class="weui-input" id="username" type="text" placeholder="请输入账号"/>
                </div>
                <div class="weui-cell__ft">
                  <a id="clearUsername" href="javascript:void(0);">
                    <i class="zj-mobile__icon_3"></i>
                  </a>
                </div>
            </div>
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd">
					<i class="zj-mobile__icon_2"></i>
                </div>
                <div class="weui-cell__bd">
                  <input class="weui-input" type="password" id="password" placeholder="请输入密码"/>
                </div>
                <div class="weui-cell__ft">
                  <a id="passwordShow" href="javascript:void(0);">
                    <i class="zj-mobile__icon_4"></i>
                  </a>
                </div>
            </div>
        </div>
        <div class="weui-cells__tips">
      		<label class="weui-switch-cp zj-mobile__member-password">
      			<span class="weui-agree__text zj-mobile__member-inline zj-mobile__member-color">记住密码</span>
                <input id="switchCP" class="weui-switch-cp__input zj-mobile__member-inline" type="checkbox" value="off" />
                <div class="weui-switch-cp__box zj-mobile__member-inline"></div>
            </label>
        </div>
      </div>
    </div>
    <div class="weui-form__opr-area">
      <a class="weui-btn zj-mobile__btn-login" href="javascript:" id="login">登录</a>
    </div>
  </div>
  <div id="js_toast" style="display: none;">
      <div class="weui-mask_transparent"></div>
      <div class="weui-toast">
          <i class="weui-icon-success-no-circle weui-icon_toast"></i>
          <p class="weui-toast__content">已完成</p>
      </div>
  </div>

<script type="text/javascript">
    $(function(){
      var $tooltips = $('.js_tooltips');
      var $toast = $('#js_toast');
      var $input = $('#js_input');
      var $agree= $('#weuiAgree');
      var $agreeCheckbox = $('#weuiAgreeCheckbox');
      var $halfScreenDialog = $('#js_half_screen_dialog');
      var $clearUsername = $("#clearUsername");
      var $username = $("#username");
      var $passwordShow = $("#passwordShow");
      var $password = $("#password");
      var $login = $("#login");
      var $switchCP = $("#switchCP");

      //n登录提交
      $login.on('click', function(){
      	var username = $username.val();
      	var password = $password.val();
      	var switchCP = $switchCP.val();
      	$.post("/offer/login/api", {"username":username, "password":password, "switchCP":switchCP}, function(result){
      		if(result.result){
      			window.location.href = "/offer.html";
      		}else{
      			$.toast(result.msg, "forbidden");
      		}
      	})
      });

      $switchCP.on('click', function(event){
      	var currentSwitchVal = $(this).val();
      	if(currentSwitchVal == "off"){
      		$(this).val("on");
      	}else{
      		$(this).val("off");
      	}
      });

      $clearUsername.on('click',function(){
      	$username.val("");
      });

      $passwordShow.on('click',function(){
          var _this = $(this);
      	var currentType = $password.prop("type");
      	if (currentType == "text") {
            _this.find("i").eq(0).removeClass("open");
      		$password.attr("type", "password");
      	}else{
            _this.find("i").eq(0).addClass("open");
      		$password.attr("type", "text");
      	}
      });
    });
</script>
