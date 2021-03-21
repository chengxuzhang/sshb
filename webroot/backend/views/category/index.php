<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('app/title','Categories');
$this->params['breadcrumbs'][] = $this->title;

function eachTree($list){
    $html = "";
    foreach ($list as $val) {
        $isFabu = $val['status'] == 10 ? "是" : "否";
        $html .= '<dl class="cate-item">
                <dt class="cf">
                <form action="/category/edit" method="post" class="layui-form">
                    <div class="layui-inline" style="width: 100%;">
                        <div class="btn-toolbar opt-btn cf">
                            <a title="编辑" href="/category/update?id='.$val['id'].'" class="btn btn-xs btn-default"><i class=\'glyphicon glyphicon-pencil\'></i>  编辑</a>
                            <a title="删除" href="/category/delete?id='.$val['id'].'" class="btn btn-xs btn-default ajax-get confirm"><i class=\'glyphicon glyphicon-trash\'></i>  删除</a>
                        </div>
                        <div class="fold"><i></i></div>
                        <div class="order"><input type="text" name="sort" class="text" value="'.$val['sort'].'"></div>
                        <div class="order">'.$isFabu.'</div>
                        <div class="name layui-inline">
                            <span class="tab-sign" style="width:'.$val['_level'] * 70 .'px;"></span>
                            <input type="hidden" name="id" value="'.$val['id'].'">
                            <input type="text" name="title" class="text" value="'.$val['title'].'">
                            <a class="add-sub-cate" title="添加子分类" href="/category/create?pid='.$val['id'].'">
                                <i class="icon-add"></i>
                            </a>
                            <span class="help-inline msg"></span>
                        </div>
                    </div>
                </form>
                </dt>';
        if(isset($val['_']) && $val['_']){
            $html .= "<dd>" . eachTree($val['_']) . "</dd>";
        }
        $html .= '</dl>';
    }
    return $html;
}

?>

<?= Html::cssFile("@web/css/category.css") ?>

<div class="category-index">

    <p>
        <?php echo Html::a(Yii::t('app/html','Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div id="w1" class="grid-view">
        <div class="category">
            <div class="hd cf">
                <div class="fold">折叠</div>
                <div class="order">排序</div>
                <div class="order">发布</div>
                <div class="name">名称</div>
            </div>
            <?= eachTree($tree); ?>
        </div>
    </div>
</div>

<script>
    layui.use(['form'],function () {
        
    })
</script>

<script type="text/javascript">
    (function($){
        /* 分类展开收起 */
        $(".category dd").prev().find(".fold i").addClass("icon-unfold")
            .click(function(){
                var self = $(this);
                if(self.hasClass("icon-unfold")){
                    self.closest("dt").next().slideUp("fast", function(){
                        self.removeClass("icon-unfold").addClass("icon-fold");
                    });
                } else {
                    self.closest("dt").next().slideDown("fast", function(){
                        self.removeClass("icon-fold").addClass("icon-unfold");
                    });
                }
            });

        /* 三级分类删除新增按钮 */
        $(".category dd dd .add-sub").remove();

        /* 实时更新分类信息 */
        $(".category")
            .on("submit", "form", function(){
                var self = $(this);
                $.post(
                    self.attr("action"),
                    self.serialize(),
                    function(data){
                        /* 提示信息 */
                        var name = data.status ? "success" : "error", msg;
                        msg = self.find(".msg").addClass(name).text(data.info)
                            .css("display", "inline-block");
                        setTimeout(function(){
                            msg.fadeOut(function(){
                                msg.text("").removeClass(name);
                            });
                        }, 1000);
                    },
                    "json"
                );
                return false;
            })
            .on("focus","input",function(){
                $(this).data('param',$(this).closest("form").serialize());

            })
            .on("blur", "input", function(){
                if($(this).data('param')!=$(this).closest("form").serialize()){
                    $(this).closest("form").submit();
                }
            });
    })(jQuery);
</script>
