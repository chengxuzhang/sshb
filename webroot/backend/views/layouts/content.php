<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<style>
    .content-tab{
        background-color: #fff;
        width: 100%;
        height: 40px;
        position: relative;
        -webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
        -moz-box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
        padding: 0 40px;
        border-bottom: 1px solid #eeeeee;
        z-index: 999;
    }
    .content-tab>a{
        display: block;
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 40px;
        position: absolute;
        font-size: 20px;
    }
    .content-tab>a.prev{
        float: left;
        left: 0;
        top:0;
        border-right: 1px solid #eee;
    }
    .content-tab>a.next{
        right: 0;
        top:0;
        border-left: 1px solid #eee;
    }
    .content-tab div.fixed-box{
        width: 100%;
        height: 40px;
        overflow: hidden;
    }
    .content-tab ul{
        height: 40px;
        position: relative;
        white-space: nowrap;
        /*left:0;*/
        transition: all .2s;
        -webkit-transition: all .2s;
    }
    .content-tab ul li{
        display: inline-block;
        min-width: 0;
        max-width: 200px;
        width: auto;
        height: 40px;
        padding: 0 20px;
        line-height: 40px;
        border-right:1px solid #eee;
        position: relative;
        margin: 0;
        list-style: none;
    }
    .content-tab ul li.active{
        background-color: #eee;
        border-right: none !important;
    }
    .content-tab ul li span{
        margin-right: 15px;
        text-align: center;
        cursor: pointer;
    }
    .content-tab ul li i{
        cursor: pointer;
        display: inline-block;
        border-radius: 50%;
        width: 16px;
        height:16px;
        text-align: center;
        line-height: 16px;
        font-size: 14px;
    }
    .content-tab ul li i:hover{
        background-color: #3c8dbc;
        color: white;
    }
    .content-tab ul li.active:after{
        content:'';
        position:absolute;
        left:0;
        top:0;
        width: 100%;
        background-color: #00a0e9;
        height: 2px;
    }
    .content{
        padding: 10px;
        overflow-y: auto;
        overflow-x:auto;
        position: relative;
        height: calc(100vh - 90px);
        height: -moz-calc(100vh - 90px);
        height: -webkit-calc(100vh - 90px);
    }
    .content-body{
        background-color: white;
        box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
        padding: 14px;
        overflow-y:auto;
    }
    .table-striped > thead > tr{
        background-color: #f2f2f2;
    }
    .content-title{
        padding: 10px 0 10px 10px;
        border-bottom: 1px solid #eee;
        font-size: 20px;
        margin-bottom: 20px;
    }
</style>

<div class="content-wrapper">
    <section>
        <div class="content-tab">
            <a href="javascript:;" class="prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
            <a href="javascript:;" class="next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            <div class="fixed-box">
                <ul></ul>
            </div>
        </div>
    </section>

    <section class="content">
        <?php
        if(Yii::$app->controller->id == "site" && Yii::$app->controller->action->id == "index"){
            ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        <?php }else{ ?>
            <div class="content-body">
                <div class="content-title">
                    <?= explode(":", str_replace("：", ":", $this->title))[0]; ?>
                </div>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        <?php } ?>
    </section>
</div>

<script>
    $(function () {
        // window.localStorage.mainTabs = "";
        var html = "",tabs = [],newTabs = [];
        if(window.localStorage.mainTabs){
            tabs = JSON.parse(window.localStorage.mainTabs);
        }
        // console.log(tabs);
        // 加入首页
        if(tabs.length<=0){
            tabs.unshift({
                'title':'首页',
                'controller':'site',
                'action':'index',
                'url':'/'
            });
        }
        var currentObj = {
            'title':'<?= explode(":", str_replace("：",":", $this->title))[0]; ?>',
            'controller':'<?= Yii::$app->controller->id; ?>',
            'action':'<?= Yii::$app->controller->action->id; ?>',
            'url':'<?= Yii::$app->request->url; ?>'
        };
        var isInTabs = false;
        $.each(tabs, function (m,n) {
            if(n.controller === currentObj.controller && n.action === currentObj.action){
                // 更新地址
                tabs[m].url = '<?= Yii::$app->request->url; ?>';
                isInTabs = true;
            }
        });
        if(!isInTabs){
            tabs.push(currentObj);
        }
        $.each(tabs, function (k,v) {
            if(v.controller === currentObj.controller && v.action === currentObj.action){
                html += "<li data-urlId=\""+k+"\" class='active'><span>"+v.title+"</span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></li>";
            }else{
                html += "<li data-urlId=\""+k+"\"><span>"+v.title+"</span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></li>";
            }
        });
        $(".fixed-box ul").css("left", (window.localStorage.navLeft ? window.localStorage.navLeft : 0) + "px").append(html);

        window.localStorage.mainTabs = JSON.stringify(tabs); // 最后载入新的导航信息

        $(".fixed-box ul li span").click(function () {
            var index = parseInt($(this).parent().data("urlid"));
            window.location.href = tabs[index].url;
        });

        var isDeleteIndex = [];
        $(".fa-times").click(function () {
            var index = parseInt($(this).parent().data("urlid"));
            if(index<=0) return false;
            isDeleteIndex.push(index);
            newTabs = [];
            $.each(tabs, function (k,v) {
                if($.inArray(k, isDeleteIndex) < 0){
                    newTabs.push(v);
                }
            });
            window.localStorage.mainTabs = JSON.stringify(newTabs);
            $(this).parent().remove();
            if($(this).parent().hasClass("active")){
                index++;
                if(index>=tabs.length){
                    index-=2;
                }
                window.location.href = tabs[index].url;
            }
        });

        $(".content-tab a.prev").click(function () {
            var left = parseInt($(".fixed-box ul").css("left"));
            if(left<0){
                left+=300;
            }
            if(left>=0){
                left = 0;
            }
            window.localStorage.navLeft = left;
            $(".fixed-box ul").css("left",left+"px");
        });

        $(".content-tab a.next").click(function () {
            var left = parseInt($(".fixed-box ul").css("left"));
            left-=300;
            window.localStorage.navLeft = left;
            $(".fixed-box ul").css("left",left+"px");
        });
    })
</script>