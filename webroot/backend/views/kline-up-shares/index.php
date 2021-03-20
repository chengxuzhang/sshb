<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

$this->title = '趋势选股';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::jsFile("@web/echarts/echarts.min.js") ?>

<style>
    .echarts-area{
        padding: 20px;
    }
    .echarts-area img{
        cursor: pointer;
    }
    .f-area{
        float: left;
        width: 100%;
    }
    .red{
        color: red;
    }
    .green{
        color: green;
    }
</style>

<div class="kline-up-shares-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('收阳数据分析', 'javascript:;', ['class' => 'btn btn-default fenxi red']) ?>
        <?= Html::a('收阴数据分析', 'javascript:;', ['class' => 'btn btn-default fenxi2 green']) ?>
    </p>

    <div class="echarts-area f-area">
        <?php foreach ($dataProvider->getModels() as $model) { ?>
        <div class="col-xs-12 col-md-6 col-lg-4" style="margin-bottom: 20px;">
            <?php if (strpos($model->scode, '600') === 0 || strpos($model->scode, '601') === 0 || strpos($model->scode, '603') === 0) { ?>
                <img src="https://image.sinajs.cn/newchart/daily/sh<?= $model->scode ?>.gif" alt="" data-code="<?= $model->scode ?>">
            <?php }else{ ?>
                <img src="https://image.sinajs.cn/newchart/daily/sz<?= $model->scode ?>.gif" alt="" data-code="<?= $model->scode ?>">
            <?php } ?>
        </div>
        <?php } ?>
    </div>

    <div class="f-area" style="display: flex;justify-content: center;">
        <?= LinkPager::widget([
            'pagination' => $dataProvider->getPagination(),
            ]);
        ?>
    </div>
</div>

<div id="detail-echarts" style="display: none;padding: 20px;">
    <div id="container" style="height: 728px;width: 1360px;"></div>
</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-gl/dist/echarts-gl.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-stat/dist/ecStat.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/dist/extension/dataTool.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/map/js/china.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/map/js/world.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/dist/extension/bmap.min.js"></script>
<script type="text/javascript">
    var dom = document.getElementById("container");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    var upColor = '#ec0000';
    var upBorderColor = '#8A0000';
    var downColor = '#00da3c';
    var downBorderColor = '#008F28';

    // 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)
    var data0;
    $(".echarts-area img").click(function () {
        // var loading = layer.load(0, {shade: false});
        var code = $(this).data('code');

        layer.open({
            type: 1,
            title: name,
            shadeClose: true,
            shade: 0.8,
            maxmin: false, //开启最大化最小化按钮
            area: ['1400px', '768px'],
            content: $("#detail-echarts")
        });

        $.get('/kline-up-shares/echarts', {code:code}, function (data){
            if (data.result) {
                // layer.close(loading);
                data0 = splitData(data.data.kline);
                runKline(data.data.shares);
            }
        })
    });

    function splitData(rawData) {
        var categoryData = [];
        var values = []
        for (var i = 0; i < rawData.length; i++) {
            categoryData.push(rawData[i].splice(0, 1)[0]);
            values.push(rawData[i])
        }
        return {
            categoryData: categoryData,
            values: values
        };
    }

    function calculateMA(dayCount) {
        var result = [];
        for (var i = 0, len = data0.values.length; i < len; i++) {
            if (i < dayCount) {
                result.push('-');
                continue;
            }
            var sum = 0;
            for (var j = 0; j < dayCount; j++) {
                sum += data0.values[i - j][1];
            }
            result.push((sum / dayCount).toFixed(2));
        }
        return result;
    }

    function runKline(myData){
        option = {
            title: {
                text: myData.name,
                left: 0
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross'
                }
            },
            legend: {
                data: ['日K', '5日均线', '10日均线', '20日均线', '30日均线']
            },
            grid: {
                left: '10%',
                right: '10%',
                bottom: '15%'
            },
            xAxis: {
                type: 'category',
                data: data0.categoryData,
                scale: true,
                boundaryGap: false,
                axisLine: {onZero: false},
                splitLine: {show: false},
                splitNumber: 20,
                min: 'dataMin',
                max: 'dataMax'
            },
            yAxis: {
                scale: true,
                splitArea: {
                    show: true
                }
            },
            dataZoom: [
                {
                    type: 'inside',
                    start: 50,
                    end: 100
                },
                {
                    show: true,
                    type: 'slider',
                    top: '90%',
                    start: 50,
                    end: 100
                }
            ],
            series: [
                {
                    name: '日K',
                    type: 'candlestick',
                    data: data0.values,
                    itemStyle: {
                        color: upColor,
                        color0: downColor,
                        borderColor: upBorderColor,
                        borderColor0: downBorderColor
                    },
                    markPoint: {
                        label: {
                            normal: {
                                formatter: function (param) {
                                    return param != null ? Math.round(param.value) : '';
                                }
                            }
                        },
                        data: [
                            {
                                name: 'XX标点',
                                coord: ['2013/5/31', 2300],
                                value: 2300,
                                itemStyle: {
                                    color: 'rgb(41,60,85)'
                                }
                            },
                            {
                                name: 'highest value',
                                type: 'max',
                                valueDim: 'highest'
                            },
                            {
                                name: 'lowest value',
                                type: 'min',
                                valueDim: 'lowest'
                            },
                            {
                                name: 'average value on close',
                                type: 'average',
                                valueDim: 'close'
                            }
                        ],
                        tooltip: {
                            formatter: function (param) {
                                return param.name + '<br>' + (param.data.coord || '');
                            }
                        }
                    },
                    markLine: {
                        symbol: ['none', 'none'],
                        data: [
                            [
                                {
                                    name: 'from lowest to highest',
                                    type: 'min',
                                    valueDim: 'lowest',
                                    symbol: 'circle',
                                    symbolSize: 10,
                                    label: {
                                        show: false
                                    },
                                    emphasis: {
                                        label: {
                                            show: false
                                        }
                                    }
                                },
                                {
                                    type: 'max',
                                    valueDim: 'highest',
                                    symbol: 'circle',
                                    symbolSize: 10,
                                    label: {
                                        show: false
                                    },
                                    emphasis: {
                                        label: {
                                            show: false
                                        }
                                    }
                                }
                            ],
                            {
                                name: 'min line on close',
                                type: 'min',
                                valueDim: 'close'
                            },
                            {
                                name: 'max line on close',
                                type: 'max',
                                valueDim: 'close'
                            }
                        ]
                    }
                },
                {
                    name: '5日均线',
                    type: 'line',
                    data: calculateMA(5),
                    smooth: true,
                    lineStyle: {
                        opacity: 0.5
                    }
                },
                {
                    name: '10日均线',
                    type: 'line',
                    data: calculateMA(10),
                    smooth: true,
                    lineStyle: {
                        opacity: 0.5
                    }
                },
                {
                    name: '20日均线',
                    type: 'line',
                    data: calculateMA(20),
                    smooth: true,
                    lineStyle: {
                        opacity: 0.5
                    }
                },
                {
                    name: '30日均线',
                    type: 'line',
                    data: calculateMA(30),
                    smooth: true,
                    lineStyle: {
                        opacity: 0.5
                    }
                },

            ]
        };
        if (option && typeof option === "object") {
            myChart.setOption(option, true);
        }
    }
</script>

<style>
    #fenxi ul, #fenxi ul li{
        margin: 0;
        padding: 0;
    }
    #fenxi ul li{
        display:flex;
        align-items: center;
        justify-content: space-between;
        float:left;
        width:100%;
        border-bottom:1px solid rgba(0,0,0,.3);
        height:30px;
    }
</style>

<div id="fenxi" style="display:none;padding:20px;">
    <div class="layui-progress" lay-showPercent="yes" lay-filter="demo">
        <div class="layui-progress-bar layui-bg-red" lay-percent="0%"></div>
    </div>
    <div id="shares-list"></div>
</div>

<script type="text/javascript">
    var stotal = 0,fxnum = 0,fxtotal = 0;

    layui.use('element', function() {
        var $ = layui.jquery
            , element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块

        $(".fenxi").click(function () {
            stotal = fxnum = fxtotal = 0;
            layer.open({
                type: 1,
                title: '分析所有上涨的数据并保存最近相关的数据',
                shadeClose: true,
                shade: 0.8,
                maxmin: false, //开启最大化最小化按钮
                area: ['1360px', '768px'],
                content: $("#fenxi")
            });
            $.post("/kline-up-shares/synchronize-hu-shen?type=yang", function (data) {
                // stotal = 10;
                stotal = data.data.length;
                var html = "<div style='margin-bottom:20px;'>共（"+data.data.length+"）支上涨的股票 " +
                    "<a href=\"javascript:;\" id='kaishi'>开始分析</a></div><div><ul>";
                $.each(data.data, function (k, v) {
                    html += "<li id=\"fx-"+v.f12+"\" data-code=\""+v.f12+"\">" +
                        "<div>股票代码："+v.f12+"   股票名称："+v.f14+"</div>" +
                        "<span>未分析</span></li>";
                });
                html += "</ul></div>";
                $("#shares-list").html(html);
            });
        });

        $(".fenxi2").click(function () {
            stotal = fxnum = fxtotal = 0;
            layer.open({
                type: 1,
                title: '分析所有上涨的数据并保存最近相关的数据',
                shadeClose: true,
                shade: 0.8,
                maxmin: false, //开启最大化最小化按钮
                area: ['1360px', '768px'],
                content: $("#fenxi")
            });
            $.post("/kline-up-shares/synchronize-hu-shen?type=yin", function (data) {
                // stotal = 10;
                stotal = data.data.length;
                var html = "<div style='margin-bottom:20px;'>共（"+data.data.length+"）支下跌的股票 " +
                    "<a href=\"javascript:;\" id='kaishi'>开始分析</a></div><div><ul>";
                $.each(data.data, function (k, v) {
                    html += "<li id=\"fx-"+v.f12+"\" data-code=\""+v.f12+"\">" +
                        "<div>股票代码："+v.f12+"   股票名称："+v.f14+"</div>" +
                        "<span>未分析</span></li>";
                });
                html += "</ul></div>";
                $("#shares-list").html(html);
            });
        });

        var httotal = 0;
        $(document).on('click', '#kaishi', function () {
            var timer = setInterval(function () {
                if(fxtotal >= stotal){
                    clearInterval(timer);
                }
                $("#shares-list ul li").each(function (k, v) {
                    var title = $(v).find("span").eq(0).html();
                    if(fxnum <= 10 &&  title == '未分析' && fxtotal < stotal){
                        fxnum += 1;
                        fxtotal += 1;
                        $(v).find("span").eq(0).html("分析中<i class='layui-icon layui-icon-loading'></i>");
                        var code = $(v).data("code");
                        $.get("/kline-up-shares/select-shares-by-thirty-kline", {code:code}, function (data) {
                            httotal += 1;
                            element.progress('demo', httotal/stotal * 100 + '%');
                            fxnum -= 1;
                            if(data.result){
                                $("#fx-"+data.data.code).find("span").eq(0).html("<i class='layui-icon layui-icon-ok'></i>");
                            }else{
                                $("#fx-"+data.data.code).find("span").eq(0).html("<i class='layui-icon layui-icon-close'></i>");
                            }
                        })
                    }
                });
            },1000)
        });
    });
</script>