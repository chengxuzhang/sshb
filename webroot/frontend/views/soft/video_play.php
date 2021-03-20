<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $title;
?>

<div class="container con" style="width: 830px;margin: 0 auto;">
    <div>
        <div style="margin-bottom: 30px;">
            <!--<video width="800" height="500px" src="../video/BIM系统.mp4" controls="controls" autoplay="autoplay"></video>-->
            <!--<video width="800" height="500px" src="https://video.dabanjia.com/czsp_20170809132820.mp4" controls="controls" autoplay="autoplay"></video>-->
            <video class="yy_video" width="800" height="500px" src="" controls="controls" autoplay="autoplay"></video>
        </div>
        <div class="tab-content">
            <div class="zj_flo">
                <form style="height: 30px;" id="myform">
                    <div class="on_sign on_sign_1">
                        <span>姓名</span>
                        <input type="text" name="" id="name" value="" />
                    </div>
                    <div class="on_sign on_sign_1">
                        <span>电话</span>
                        <input type="text" name="" id="phone" value="" />
                    </div>
                    <div class="on_sign on_sign_1">
                        <span>城市</span>
                        <select id="Province" name="Province" class="on_section"></select>
                        <select id="City" name="City" class="on_section"></select>
                    </div>
                </form>
                <h3 class="text-center on_sqty" style="margin-top: 50px;margin-left: 25%; width: 50%;cursor: pointer;background-color: #006eff;color:white;border: none;">确定</h3>
                <p class="text-center">提交后我们会在24小时内联系您</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        new PCAS("Province","City");
    });
</script>

