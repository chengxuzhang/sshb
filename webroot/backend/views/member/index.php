<?php

use backend\components\Html;
use yii\grid\GridView;

$this->title = Yii::t('app/title', 'Members');
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .avator-box{
        width: 30px;
        height: 30px;
        position: relative;
    }
    .avator-box img{
        width: 100%;
        height: 100%;
    }
    .avator-box span{
        width: 10px;
        height: 10px;
        position: absolute;
        right:-5px;
        top:-5px;
        background-color: #e6176b;
        display: block;
        -webkit-border-radius:50%;
        -moz-border-radius:50%;
        border-radius:50%;
    }
</style>

<div class="member-index">
    <?php echo $this->render('_search', [
        'model' => $searchModel,
    ]); ?>

    <p>
        <?= Html::a('设置/取消KOL用户', 'javascript:;', ['class' => 'btn btn-primary','id'=>'setKol']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'summary' => false, 
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\CheckboxColumn',
                'name'=>'id',
            ],
            [
                'attribute' => 'avator',
                'format' => 'html',
                'value' => function ($model) {
                    return "<div class='avator-box'><img src='".$model->avator."'/>".($model::COMMON_STATUS_ACTIVE == $model->isKol ? '<span></span>' : '')."</div>";
                },
            ],
            'username',
            'nickname',
//            'phone',
//            'email',
//            'receiver_address',
             'sex',
            [
                'attribute' => 'isKol',
                'format'=>'html',
                'value' => function($model){
                    if($model->isKol == $model::COMMON_STATUS_ACTIVE){
                        return "<span class=\"label label-primary\">".$model->commonStatus[$model->isKol]."</span>";
                    }else if($model->isKol == $model::COMMON_STATUS_DELETED){
                        return "<span class=\"label label-default\">".$model->commonStatus[$model->isKol]."</span>";
                    }
                },
            ],
            [
                'attribute' => 'status',
                'format'=>'html',
                'value' => function($model){
                    if($model->status == $model::COMMON_STATUS_ACTIVE){
                        return "<span class=\"label label-primary\">".$model->commonStatus[$model->status]."</span>";
                    }else if($model->status == $model::COMMON_STATUS_DELETED){
                        return "<span class=\"label label-default\">".$model->commonStatus[$model->status]."</span>";
                    }
                },
            ],
             'level',
             'ledou',
             'integral',

            [
                'header' => '操作',
                'class' => 'backend\components\ActionColumn',
                'template' => '{delete} {nodelete} {jifen}',
                'buttons' => [
                    'jifen' => function ($url, $model, $key) {
                        return Html::a('<i class=\'glyphicon glyphicon-cog\'></i>  设置积分', 'javascript:;',['class'=>'btn btn-default btn-xs setfen','data-id'=>$model->id]);
                    },
                ],
                'visibleButtons'=>[
                    'delete'=>function ($model, $key, $index) {
                        return $model->status === $model::COMMON_STATUS_ACTIVE;
                    },
                    'nodelete'=>function ($model, $key, $index) {
                        return $model->status === $model::COMMON_STATUS_DELETED;
                    }
                ],
                'headerOptions'=>['width'=>'120'],
            ],
        ],
    ]); ?>
</div>

<style>
    .layui-input-block{
        margin-left: 0 !important;
    }
</style>

<div id="setFen" style="display: none;">
    <div style="padding: 10px;">
        <div style="color:red;margin-bottom: 20px;">
            温馨提示：设置要增加的积分和乐豆点击后面的增加和减少按钮修改用户数据，点击确定按钮将刷新页面，可在列表中查看修改的数据。
        </div>
        <form action="" class="layui-form layui-form-pane">
            <div class="layui-form-item">
                <div class="layui-inline" id="set1">
                    当前积分：<span>0</span>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">增加积分</label>
                    <div class="layui-input-inline">
                        <input type="tel" name="addjifen" autocomplete="off" class="layui-input">
                    </div>
                    <button class="layui-btn layui-btn-danger setbtn" type="button">增加</button>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">减少积分</label>
                    <div class="layui-input-inline">
                        <input type="text" name="jianjifen" autocomplete="off" class="layui-input">
                    </div>
                    <button class="layui-btn layui-btn-danger setbtn" type="button">减少</button>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline" id="set2">
                    当前乐豆：<span>0</span>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">增加乐豆</label>
                    <div class="layui-input-inline">
                        <input type="tel" name="addledou" autocomplete="off" class="layui-input">
                    </div>
                    <button class="layui-btn layui-btn-danger setbtn" type="button">增加</button>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">减少乐豆</label>
                    <div class="layui-input-inline">
                        <input type="text" name="jianledou" autocomplete="off" class="layui-input">
                    </div>
                    <button class="layui-btn layui-btn-danger setbtn" type="button">减少</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(function () {
        var id = 0;
        $(".setfen").click(function () {
            id = $(this).data("id");
            layer.open({
                type: 1
                ,title:"设置积分"
                ,area:["960px","300px"]
                ,btn: ['确定', '取消']
                ,yes: function(index, layero){
                    layer.closeAll();
                    window.location.reload();
                }
                ,content: $('#setFen') //这里content是一个DOM，注意：最好该元素要存放在body最外层，否则可能被其它的相对元素所影响
            });

            $.getJSON("/member/get-member",{id:id},function (res) {
                if(res.status == 200){
                    $("#set1").find("span").html(res.data.integral);
                    $("#set2").find("span").html(res.data.ledou);
                }
            });
        });

        $(".setbtn").click(function () {
            var _this = $(this);
            var num = parseInt($(this).prev().find("input").eq(0).val());
            $.post("/member/set?id="+id,{num:num,type:_this.prev().find("input").eq(0).attr("name")},function (res) {
                if(res.status == 200){
                    var now = parseInt(_this.parents(".layui-form-item").find(".layui-inline").eq(0).find("span").html());
                    var number = _this.prev().find("input").eq(0).attr("name").indexOf("add")!=-1 ? now+num : now-num;
                    _this.parents(".layui-form-item").find(".layui-inline").eq(0).find("span").html(number);
                }
                layer.msg(res.msg);
            })
        });

        $("#setKol").click(function () {
            // 获取选中的商品
            var sid = [];
            $("#w1 input[type=checkbox]").each(function (k,v) {
                //console.log($(v).context.checked);
                if($(v).context.checked && !$(v).hasClass("select-on-check-all")){
                    sid.push($(v).val());
                }
            });
            // //console.log(sid);
            if(sid.length<=0){
                layer.msg("请至少选中一个会员！");
                return false;
            }

            $.post("/member/set-kol",{sid:sid.join(",")},function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.reload();
                    })
                }else{
                    layer.msg(res.msg);
                }
            })
        });
    })
</script>
