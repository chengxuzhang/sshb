<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $title;
?>

<div class="container con" style="width: 100%;margin: 0 auto;">
    <div>
        <div style="margin-bottom: 30px;">
            <video class="yy_video" width="100%" height="auto" src="" controls="controls" autoplay="autoplay"></video>
        </div>
        <div class="tab-content">
            <div style="padding: 20px 40px 20px 0">
                <form class="layui-form" action="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">姓名</label>
                        <div class="layui-input-block">
                            <input type="text" name="name" autocomplete="off" placeholder="请输入姓名" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">电话</label>
                        <div class="layui-input-block">
                            <input type="text" name="phone" placeholder="请输入电话" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">选择省份</label>
                        <div class="layui-input-block">
                            <select name="province" lay-filter="province">
                                <option value="">请选择省份</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">选择城市</label>
                        <div class="layui-input-block">
                            <select name="city" lay-filter="city">
                                <option value="">请选择城市</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit="" lay-filter="demo1" style="background-color: rgba(0,110,255,1)">提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    layui.use(['form'], function () {
        var form = layui.form;

        // console.log(PCAD);
        var provinces = [];
        var citys = [];
        var type1 = PCAD.split("#");

        for(k in type1){
            var type2 = type1[k].split("$");
            provinces.push(type2[0]);
            var type3 = type2[1].split("|");
            citys[type2[0]] = [];
            for(o in type3){
                var type4 = type3[o].split(",");
                citys[type2[0]].push(type4[0]);
            }
        }

        var provinceHtml = "";
        for(p in provinces){
            provinceHtml += "<option value='"+provinces[p]+"'>"+provinces[p]+"</option>";
        }
        $("select[name='province']").html(provinceHtml);
        form.render('select');

        form.on('select(province)', function(data){
            var now_p = data.value;
            var cityList = citys[now_p];
            var cityHtml = "";
            for (c in cityList){
                cityHtml += "<option value='"+cityList[c]+"'>"+cityList[c]+"</option>";
            }
            $("select[name='city']").html(cityHtml);
            form.render('select');
        });

        //监听提交
        form.on('submit(demo1)', function(data){
            $.post('tiyan.html', data.field,function (res) {
                layer.msg('提交成功！',function () {
                    window.location.reload();
                });
            });
            return false;
        });
    });
</script>

