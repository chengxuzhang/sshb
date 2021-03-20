<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\components\CacheConfig;

$this->title = Yii::t('app/title','Configs');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    label{
        box-sizing: content-box;
        margin-bottom: 0;
    }
    .layui-input-block{
        margin-left: 160px;
    }
    .layui-form-label{
        width:130px;
    }
    legend{
        width:auto !important;
        border: none;
    }
    .layui-upload-list{
        width: 92px;
        height: auto;
        padding-left: 110px;
    }
    .layui-upload-list img{
        width: 92px;
        height: auto;
    }
</style>

<?= Html::jsFile("@web/baidu/ueditor.config.js") ?>
<?= Html::jsFile("@web/baidu/ueditor.all.js") ?>

<div class="config-index">

    <div class="layui-tab layui-tab-card">
        <ul class="layui-tab-title">
            <?php
            $config_type = getArrKeyValueList(CacheConfig::getConfigCache("config_type"), ":");
            $index = 0;
            foreach ($config_type as $v){
                ?>
                <li <?= $index == 0 ? "class=\"layui-this\"" : "" ?>><?= $v['val'] ?></li>
                <?php $index++;} ?>
        </ul>
        <div class="layui-tab-content" style="background-color: white;">
            <?php
            $index = 0;
            foreach ($config_type as $m => $n){
                ?>
                <div class="layui-tab-item <?= $index == 0 ? "layui-show" : "" ?>">
                    <form class="layui-form layui-form-pane" action="">
                        <?php
                        $num = 0;
                        foreach ($configList as $conf) {
                            if($n['key'] == $conf->config_type){
                                if($conf->type == 1){
                                    ?>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label"><?= $conf->title; ?></label>
                                        <div class="layui-input-<?= empty($conf->remark) ? "block" : "inline" ?>">
                                            <input type="text" name="<?= $conf->fieldName; ?>" lay-verify="<?= $conf->fieldName; ?>" autocomplete="off" class="layui-input" value="<?= $conf->value; ?>">
                                        </div>
                                        <?php if(!empty($conf->remark)) { ?>
                                            <div class="layui-form-mid layui-word-aux"><?= $conf->remark; ?></div>
                                        <?php } ?>
                                    </div>
                                <?php }else if($conf->type == 2){ ?>
                                    <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label"><?= $conf->title; ?></label>
                                        <div class="layui-input-block">
                                            <textarea class="layui-textarea" name="<?= $conf->fieldName; ?>" lay-verify="<?= $conf->fieldName; ?>" rows="6"><?= $conf->value; ?></textarea>
                                        </div>
                                        <?php if(!empty($conf->remark)) { ?>
                                            <div class="layui-form-mid layui-word-aux"><?= $conf->remark; ?></div>
                                        <?php } ?>
                                    </div>
                                <?php }else if($conf->type == 3){ ?>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label"><?= $conf->title; ?></label>
                                        <div class="layui-input-<?= empty($conf->remark) ? "block" : "inline" ?>">
                                            <select name="<?= $conf->fieldName; ?>" lay-filter="<?= $conf->fieldName; ?>">
                                                <option value=""></option>
                                                <?php
                                                $configArr = getArrKeyValueList($conf->content, "=");
                                                foreach ($configArr as $arr){
                                                    ?>
                                                    <option value="<?= $arr['key'] ?>" <?= ($arr['key'] == $conf->value) ? "selected" : "" ?>><?= $arr['val'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <?php if(!empty($conf->remark)) { ?>
                                            <div class="layui-form-mid layui-word-aux"><?= $conf->remark; ?></div>
                                        <?php } ?>
                                    </div>
                                <?php }else if($conf->type == 4){ ?>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label"><?= $conf->title; ?></label>
                                        <div class="layui-upload">
                                            <button type="button" class="layui-btn configUpload">上传图片</button>
                                            <div class="layui-upload-list">
                                                <img class="layui-upload-img" src="<?=
                                                implode("", [
                                                    CacheConfig::getConfigCache("oss_http"),
                                                    CacheConfig::getConfigCache("endpoint"),
                                                    CacheConfig::getConfigCache("oss_dirname"),
                                                    $conf->value,
                                                    ""
                                                ]);
                                                ?>">
                                                <p class="demoText"></p>
                                                <input type="hidden" name="<?= $conf->fieldName; ?>" lay-verify="<?= $conf->fieldName; ?>" value="<?= $conf->value; ?>">
                                            </div>
                                        </div>
                                        <?php if(!empty($conf->remark)) { ?>
                                            <div class="layui-form-mid layui-word-aux"><?= $conf->remark; ?></div>
                                        <?php } ?>
                                    </div>
                                <?php }else if($conf->type == 5){ ?>
                                    <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label"><?= $conf->title; ?></label>
                                        <div class="layui-input-block">
                                            <textarea class="layui-textarea" id="<?= $conf->fieldName; ?>" name="<?= $conf->fieldName; ?>" lay-verify="<?= $conf->fieldName; ?>" rows="6"><?= $conf->value; ?></textarea>
                                        </div>
                                        <?php if(!empty($conf->remark)) { ?>
                                            <div class="layui-form-mid layui-word-aux"><?= $conf->remark; ?></div>
                                        <?php } ?>
                                    </div>
                                    <script>
                                        UE.getEditor('<?= $conf->fieldName; ?>', {
                                            toolbars:[[
                                                'fullscreen', 'source', '|',
                                                'undo', 'redo', '|',
                                                'insertcode', '|',
                                                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
                                                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                                                'bold', 'italic', 'underline', '|',
                                                'forecolor', '|',
                                                'inserttable', 'blockquote', 'horizontal', '|',
                                                'link', 'unlink', 'anchor', '|',
                                                'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                                                'insertimage', 'emotion',
                                            ]],//这里可以选择自己需要的工具按钮名称,此处仅选择如下五个
                                            //更多其他参数，请参考ueditor.config.js中的配置项
                                            serverUrl: '/config/upload',
                                            initialFrameHeight:350,
                                            initialFrameWidth:"100%",
                                            autoHeightEnabled: false
                                        });
                                    </script>
                                <?php }else if($conf->type == 6){ ?>
                                <?php } ?>
                                <?php $num++;} ?>
                        <?php } ?>
                        <div class="layui-form-item">
                            <div class="layui-input-inline">
                                <button class="layui-btn" lay-submit="" lay-filter="*" type="button">保存</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php $index++;} ?>
        </div>
    </div>

</div>

<script>
    layui.use(['element','form','upload'], function(){
        var $ = layui.jquery
            ,form = layui.form
            ,upload = layui.upload
            ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块

        //触发事件
        var active = {
            tabAdd: function(){
                //新增一个Tab项
                element.tabAdd('demo', {
                    title: '新选项'+ (Math.random()*1000|0) //用于演示
                    ,content: '内容'+ (Math.random()*1000|0)
                    ,id: new Date().getTime() //实际使用一般是规定好的id，这里以时间戳模拟下
                })
            }
            ,tabDelete: function(othis){
                //删除指定Tab项
                element.tabDelete('demo', '44'); //删除：“商品管理”


                othis.addClass('layui-btn-disabled');
            }
            ,tabChange: function(){
                //切换到指定Tab项
                element.tabChange('demo', '22'); //切换到：用户管理
            }
        };

        $('.site-demo-active').on('click', function(){
            var othis = $(this), type = othis.data('type');
            active[type] ? active[type].call(this, othis) : '';
        });

        //Hash地址的定位
        var layid = location.hash.replace(/^#test=/, '');
        element.tabChange('test', layid);

        element.on('tab(test)', function(elem){
            location.hash = 'test='+ $(this).attr('lay-id');
        });

        //监听提交
        form.on('submit(*)', function(data){
            $.post("/config/set-config",data.field,function (res) {
                layer.msg(res.msg);
            });
            return false;
        });


        //普通图片上传
        var uploadInst = upload.render({
            elem: '.configUpload'
            ,field: 'upload'
            ,accept: 'file' //普通文件
            ,exts: 'jpg|png|bmp|jpeg' //只允许上传图片文件
            ,url: '/config/upload?action=uploadimage&nofix=1'
            ,before: function(obj){
                var item = this.item;
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $(item).parent().find(".layui-upload-list").eq(0).find("img").eq(0).attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                var item = this.item;
                if(res.state == 'SUCCESS'){
                    layer.msg("上传成功！");
                    $(item).parent().find(".layui-upload-list").eq(0).find("input").eq(0).val(res.url);
                }
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var item = this.item;
                var demoText = $(item).parent().find(".layui-upload-list").eq(0).find("p").eq(0);
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });

        //调用示例
        layer.photos({
            photos: '.layui-upload-list'
            ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
        });
    });
</script>
