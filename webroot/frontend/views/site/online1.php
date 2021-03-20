<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $title;
?>

<div class="container con m-c" style="width: 400px;margin: 0 auto;">
    <h3 class="on_title text-center">提交信息</h3>
    <div>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active">
                <form>
                    <div class="on_sign">
                        <span>姓名</span>
                        <input type="text" name="" id="name" value="" />
                    </div>
                    <div class="on_sign">
                        <span>电话</span>
                        <input type="text" name="" id="phone" value="" />
                    </div>
                    <div class="on_sign">
                        <span>城市</span>
                        <select id="Province" name="Province" class="on_section"></select>
                        <select id="City" name="City" class="on_section"></select>
                    </div>
                </form>
                <h3 class="text-center on_sqty" style="cursor: pointer;background-color: #006eff;color:white;border: none;">确定</h3>
                <p class="text-center">提交后我们会在24小时内联系您</p>
            </div>
        </div>
    </div>
</div>

<!--<script src="../js/online.js" type="text/javascript" charset="utf-8"></script>-->
<script type="text/javascript">
    $(function(){
        new PCAS("Province","City");
    });
</script>