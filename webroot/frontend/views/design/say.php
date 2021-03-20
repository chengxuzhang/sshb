<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/design.css") ?>
<?= Html::cssFile("@web/css/animate.css") ?>
<style>
    .bimvr_nav,.navbar-default{
        background:rgba(0,110,255,1);
    }
    .zj_color_current{
        background-color: white;
        color:rgba(0,110,255,1) !important;
    }
    .navbar-fixed-top{
        background:rgba(0,110,255,0.5) !important;
    }
    html,body{
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>

<!--wrap-->
<div class="container-fluid vr_wrap">
    <!--mp-->
    <div class="row visible-xs">
        <div class="visible-xs">
            <nav class="navbar navbar-default m_loser" role="navigation" style="margin: 0;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <img src="../m-images/icon_daohang.png" class="m_dh" style="position: absolute;"/>
                            <img src="../m-images/close.png" class="m_dh1" style="position: absolute;"/>
                        </button>
                        <a class="navbar-brand" href="#" style="padding-left: 30px;"><img src="../m-images/logo_black_xiao.png" class="img-responsive" style="width: 40%;"/></a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav m_menu">
                            <!-- 手机端头部开始 -->
                            <?php echo $this->render('/common/_m_header'); ?>
                            <!-- 手机端头部结束 -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--nav-->
    <div class="row vr_nav bimvr_nav hidden-xs">
        <div class="vr_nav_con">
            <div class="col-lg-3 col-md-3 col-sm-3 zj_logo hidden-xs"><h1><a href="/"><img src="../images/logo_bai.png"/></a></h1></div>
            <div class="col-lg-3 zj_logo_m visible-xs"><h1><img src="../images/logo_bai.png"/></h1></div>
            <ul class="col-lg-9 col-md-9 col-sm-9 zj_menu hidden-xs">
                <!-- 头部开始 -->
                <?php echo $this->render('/common/_header'); ?>
                <!-- 头部结束 -->
            </ul>
        </div>
    </div>
    <div id="cubeTransition" class="row">
        <div class="design_page page1 page_style_bg_1" id="page1">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/zn.png" gif-src="images/2_slices/say.gif" class="people">
                <div class="say-list">
                    <span class="t1">欢迎来到真家智能设计~</span>
                    <span class="t2">想知道您内心中，喜欢什么样的装修风格吗？</span>
                    <span class="t3">这个问题就交给我吧！</span>
                </div>
                <div class="question-title qipao">
                    <span></span>
                </div>
            </div>
            <div class="question-list qlist">
                <ul></ul>
            </div>
        </div>
        <div class="design_page page2 page_style_bg_2" id="page2">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/rgbz.png" gif-src="images/2_slices/rgzz.png" class="people">
                <div class="question-title qipao qipao-white">
                    <span></span>
                </div>
            </div>
            <div class="question-list-2 qlist">
                <ul></ul>
            </div>
        </div>
        <div class="design_page page3 page_style_bg_3" id="page3">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/rgbz.png" gif-src="images/2_slices/rgzz.png" class="people">
                <div class="question-title qipao qipao-white">
                    <span></span>
                </div>
            </div>
            <div class="question-list question-list-3 qlist">
                <ul></ul>
            </div>
        </div>
        <div class="design_page page4 page_style_bg_1" id="page4">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/zn.png" gif-src="images/2_slices/say.gif" class="people">
                <div class="question-title qipao">
                    <span></span>
                </div>
            </div>
            <div class="question-list qlist">
                <ul></ul>
            </div>
        </div>
        <div class="design_page page5 page_style_bg_2" id="page5">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/rgbz.png" gif-src="images/2_slices/rgzz.png" class="people">
                <div class="question-title qipao qipao-white">
                    <span></span>
                </div>
            </div>
            <div class="question-list question-list-5 qlist">
                <ul></ul>
            </div>
        </div>
        <div class="design_page page6 page_style_bg_3" id="page6">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/rgbz.png" gif-src="images/2_slices/rgzz.png" class="people">
                <div class="question-title qipao qipao-white">
                    <span></span>
                </div>
            </div>
            <div class="question-list qlist">
                <ul></ul>
            </div>
        </div>
        <div class="design_page page7 page_style_bg_1" id="page7">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/zn.png" gif-src="images/2_slices/say.gif" class="people">
                <div class="question-title qipao">
                    <span></span>
                </div>
            </div>
            <div class="question-list qlist">
                <ul></ul>
            </div>
        </div>
        <div class="design_page page8 page_style_bg_2" id="page8">
            <div class="page_box zj_design_2">
                <img src="images/2_slices/rgbz.png" gif-src="images/2_slices/rgzz.png" class="people">
                <div class="question-title qipao qipao-white">
                    <span></span>
                </div>
            </div>
            <div class="question-list question-list-8 qlist">
                <ul></ul>
            </div>
        </div>

        <div class="design_page page_process page_style_bg_1" id="page_process">
            <canvas id="canvas" style="position: absolute;left:0;top:0;"></canvas>
            <div id="jingtai" style="display:none;background: url('../m-images/design/canvas.png') no-repeat;background-size:100% 100%;position: absolute;left:0;top:0;height: 100vh;width:100vw;"></div>
            <div class="process">
                <div class="process-box">
                    <div class="img"></div>
                    <div class="list">
                        <ul>
                            <li>分析数据信息</li>
                            <li>样板模型库档案配套</li>
                            <li>色系偏好进行验算</li>
                            <li>渲染效果图优化整理</li>
                            <li>为您准备专属风格</li>
                        </ul>
                    </div>
                    <div class="number">0%</div>
                </div>
            </div>
        </div>
        <div class="quesion-footer">
            <div class="btn_group" style="display: block;">
                <div style="position: relative">
                    <a href="javascript:;" class="next" id="next">确定</a>
                    <a href="javascript:;" class="prev" id="prev">返回上一步</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function animationIn(i){
        console.log(i,'i\'m in')
        switch(i) {
            case 1:
                $('.page2 h2').fadeIn();
                break;
            case 2:
                $('.page3 h2').animate({top:'40%',left:'30%'},1000);
                break;
            case 3:
                setTimeout(function(){
                    $('.page4 h2').addClass('ani')
                    console.log('hhh')
                },0)
                break;
            default:
                ;
        }
    }

    function animationOut(i){
        console.log(i,'i\'m out')
        switch(i) {
            case 1:
                $('.page2 h2').fadeOut();
                break;
            case 2:
                $('.page3 h2').animate({top:0,left:0},1000);
                break;
            case 3:
                $('.page4 h2').removeClass('ani')
                break;
            default:
                ;
        }
    }
</script>
<script>
    var httpUrl = "<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") ?>";
    var nextPage = 1;
    var currentPage = 1; // 当前页面即是当前问题的序号
    var pageType = [];
    pageType[1] = {type:1, w:960};
    pageType[2] = {type:2, w:960};
    pageType[3] = {type:3, w:560};
    pageType[4] = {type:1, w:800};
    pageType[5] = {type:1, w:800};
    pageType[6] = {type:1, w:800};
    pageType[7] = {type:1, w:800};
    pageType[8] = {type:1, w:800};
    $(function () {
        var pl = 50;
        var qpl = 20; // 问题的说话速度
        var jg = 1000; // 下一句间隔时间
        var index = 0;
        $("#page1").show();
        var spanLen = $("#page1").find(".say-list").eq(0).children('span').length;
        $("#page1 span").hide();
        var people = $("#page1").find(".people").eq(0);

        function startSay() {
            // $(".zj_design_2").show();
            setTimeout(function () {
                people.attr("src","images/2_slices/say.gif");
                var obj = $("#page1").find(".say-list").eq(0).find("span").eq(index);
                obj.show();
                var word = obj.html();
                obj.html("");
                var wordArr = word.split("");
                var wordLen = wordArr.length;
                var w = "";
                var num = 0;
                var timer = setInterval(function () {
                    if(num>wordLen-1){
                        clearInterval(timer);
                        people.attr("src","images/2_slices/zn.png");
                        index++;
                        if(index<=2){
                            startSay();
                        }else{
                            questionStart(people);
                        }
                        return false;
                    }
                    w += wordArr[num];
                    obj.html(w);
                    num++;
                },pl);
            },jg)
        }
        startSay();

        var questionArr = []; // 已经选择的问题
        var nextQuestion = <?= $res[0]['id']; ?>;
        var currentStyle = ""; // 最终展示的图片样式
        questionArr.push(nextQuestion); // 第一个问题是肯定会回答

        var questionList = [];
        <?php
            foreach ($res as $item){
        ?>
        questionList[<?= $item['id'] ?>] = {
            'title' : '<?= $item['title'] ?>',
            'img' : '<?= $item['img'] ?>',
            'answerList': $.parseJSON('<?= $item['answerList'] ?>')
        };
        <?php } ?>

        var questionIds = [];
        $.each(questionList, function (k,v) {
            if(v != undefined){
                questionIds.push(k);
            }
        });

        $("#cubeTransition .design_page").each(function (key, item) {
            $(item).attr("data-question", questionIds[key]);
            $(item).attr("data-page", key+1);
        });

        function questionStart(people) {
            if(goPAGE()){
                $("#cubeTransition>div.design_page").css("height", "calc(100vh - 135px)");
            }
            var spans = $("#page1").find(".say-list").eq(0).find("span");
            var len = spans.length;
            var timer = setInterval(function () {
                len--;
                if(len<0){
                    clearInterval(timer);
                    setTimeout(function () {
                        if(goPAGE()){
                            $("#page1").find(".zj_design_2").eq(0).css({"top":"100px","margin-top":"50px"});
                        }else{
                            $("#page1").find(".zj_design_2").eq(0).css({"top":"100px"});
                        }
                    },1200);
                    setTimeout(function () {
                        $("#page1").find(".say-list").eq(0).remove();
                        sayQuestion(people);
                    },1700);
                }
                spans.eq(len).addClass("animated fadeOut");
            },400);
        }

        /**
         * 讲出问题
         */
        function sayQuestion(people) {
            var bz = people.attr("src");
            people.attr("src", people.attr("gif-src")); // 机器人张嘴讲话
            var obj = $("#page"+currentPage).find(".question-title").eq(0).find("span").eq(0);
            $("#page"+currentPage).find(".question-title").eq(0).show();
            var questionId = parseInt($("#page"+currentPage).data("question"));
            obj.show();
            var word = questionList[questionId].title;
            obj.html("");
            var wordArr = word.split("");
            var wordLen = wordArr.length;
            var w = "";
            var num = 0;
            var timer = setInterval(function () {
                if(num>=wordLen-1){
                    clearInterval(timer);
                    people.attr("src", bz);
                    setTimeout(function () {
                        showAnswerStyle(pageType[currentPage].type);
                    },1000);
                }
                w += wordArr[num];
                obj.html(w);
                num++;
            },qpl);
        }

        /**
         * 显示问题
         */
        function showAnswerStyle(type) {
            var html = "";
            switch(type){
                case 1:
                    $.each(questionList[parseInt($("#page"+currentPage).data("question"))]['answerList'],function (k,v) {
                        var img = goPAGE() ? httpUrl+v.img + "?x-oss-process=image/auto-orient,1/interlace,1/resize,m_lfit,w_420/quality,q_90" : httpUrl+v.img;
                        html+='<li class="animated fadeIn" data-link="'+v.link+'" data-plan="'+v.style+'">\
                            <div class="li-box">\
                            <img src="'+img+'" alt="">\
                            <span>'+v.val+'</span>\
                            </div>\
                            <div class="check"><span class="glyphicon glyphicon-ok"></span></div>\
                            </li>';
                    });
                    break;
                case 2:
                    $.each(questionList[parseInt($("#page"+currentPage).data("question"))]['answerList'],function (k,v) {
                        html+='<li class="animated fadeIn" data-link="'+v.link+'" data-plan="'+v.style+'"><div class="li-box">'+v.val+'</div><div class="check"><span class="glyphicon glyphicon-ok"></span></div></li>';
                    });
                    break;
                case 3:
                    $.each(questionList[parseInt($("#page"+currentPage).data("question"))]['answerList'],function (k,v) {
                        var img = goPAGE() ? httpUrl+v.img + "?x-oss-process=image/auto-orient,1/interlace,1/resize,m_lfit,w_420/quality,q_90" : httpUrl+v.img;
                        html+='<li class="animated fadeIn" data-link="'+v.link+'" data-plan="'+v.style+'">\
                            <div class="li-box">\
                            <img src="'+img+'" alt="">\
                            <span>'+v.val+'</span>\
                            </div>\
                            <div class="check"><span class="glyphicon glyphicon-ok"></span></div>\
                            </li>';
                    });
                    break;
            }
            $("#page"+currentPage).find(".qlist").eq(0).find("ul").eq(0).html(html);
            $(".quesion-footer").show();
        }

        // 下一个问题的标识
        $(document).on('click','.qlist ul li', function () {
            $(this).parent().find(".check").removeClass("active");
            $(this).find(".check").eq(0).addClass("active");
            nextQuestion = parseInt($(this).data("link"));
            console.log(nextQuestion);
            if(nextQuestion == 0){
                currentStyle = $(this).data("plan");
                $.post("/result.html",{"style":currentStyle},function (data) {}); // 存入结果
                nextPage = -1;
                return false;
            }
            nextPage = parseInt($("div[data-question="+nextQuestion+"]").data("page"));
        });

        var isChecked = false;
        var qNum = 1;

        $("#next").click(function () {
            if(next == nextPage){
                layer.msg("请先选择一个问题！");
                return false;
            }
            if(nextQuestion != 0){
                if(goPAGE()){
                    $("#page"+nextPage).find(".zj_design_2").eq(0).css({"top":"100px","margin-top":"50px"});
                }else{
                    $("#page"+nextPage).find(".zj_design_2").eq(0).css({"top":"100px"});
                }
                $("#page"+nextPage).find(".qlist").eq(0).find("ul").eq(0).html(""); // 清空下一个问题的问题列表
                $("#page"+nextPage).find(".question-title").eq(0).find("span").html("");
                qNum++;
                questionArr.push(nextQuestion); // 加入这个问题
                console.log(nextPage);
                openIndex(nextPage, 'down');
                currentPage = nextPage;
            }else{
                openIndex($("#cubeTransition>div.design_page").length, 'down');
                setTimeout(function () {
                    goShowProcess();
                },1000);
            }
        });

        $("#prev").click(function () {
            if(questionArr.length>1){
                qNum--;
                questionArr.pop(); // 弹出最后一个问题
                nextQuestion = questionArr[questionArr.length-1];
                nextPage = parseInt($("div[data-question="+nextQuestion+"]").data("page"));
                $("#page"+nextPage).find(".qlist").eq(0).find("ul").eq(0).html(""); // 清空上一个问题的问题列表
                $("#page"+nextPage).find(".question-title").eq(0).find("span").html("");
                console.log(nextPage);

                openIndex(nextPage, 'up');
                currentPage = nextPage;
            }else{
                layer.msg("已经是第一个问题！");
            }
        });

        // 开始展示进度数据
        function  goShowProcess() {
            if(goPAGE()){
                $("#canvas").hide();
                $("#jingtai").show();
            }else{
                startPlayBg(); // 开始绘制背景
            }
            document.querySelector('.quesion-footer').classList.add('animated', 'fadeOutUp');
            $(".btn_group").hide();
            $(".quesion-footer").remove();
            if(goPAGE()){
                $("#cubeTransition>div.design_page").css("height", "100vh");
            }

            $(".process").show(); // 展示进度模块
            document.querySelector('.process-box .img').classList.add('animated', 'fadeInLeft');
            $(".process-box .img").show();

            // 循环展示列表
            var liLen = $(".process-box ul li").length;
            console.log(liLen);
            var liNum = 0;
            var timer = setInterval(function () {
                if(liNum>liLen-1){
                    clearInterval(timer);
                    startChangeBlue();
                    return false;
                }
                $(".process-box ul").find("li").eq(liNum).addClass("animated fadeInUp").show();
                liNum++;
            },200);

            document.querySelector('.process-box .number').classList.add('animated', 'fadeInRight');
            $(".process-box .number").show();
        }

        function startChangeBlue() {
            var total = 0;
            var block = 0;
            var processLiLen = $(".process-box ul li").length;
            var processLiNum = 0;
            var time = 500;
            function startChangeBlueSub() {
                setTimeout(function () {
                    $.each($(".process-box ul li"), function (k,v) {
                        if($(v).hasClass("current")){
                            $(v).removeClass("current").addClass("done");
                        }
                    });
                    if(processLiNum>processLiLen-1){
                        setTimeout(function () {
                            window.location.href = "/result.html";
                        },1000);
                        return false;
                    }
                    $(".process-box ul").find("li").eq(processLiNum).addClass("current");
                    var number1 = goPAGE() ? processLiNum*18 + "vw" : processLiNum*(54 + 20) + "px";
                    var number2 = goPAGE() ? (processLiNum*18-3) + "vw" : processLiNum*(54 + 20)-45 + "px";
                    $(".process-box .number").css("top", number1);
                    $(".process-box .img").css("top", number2);
                    processLiNum++;
                    time = Math.ceil(Math.random()*1000) + 500;
                    startChangeBlueSub();
                    block = 0;
                    total = (processLiNum-1) * 20;
                },time);
            }
            startChangeBlueSub();
            setTimeout(function () {
                var timer = setInterval(function () {
                    block = 20 * 10 / time;
                    console.log(block);
                    total += block;
                    if(total>=100){
                        clearInterval(timer);
                        return false;
                    }
                    $(".process-box .number").html(Math.ceil(total)+"%");
                },10);
            },time);
        }

        // 下面的代码是切换页面使用
        var length = $('#cubeTransition>div').length,
            current = 1,
            next = 1,
            outClass, inClass, onGoing = false;
        $('#cubeTransition>div:eq(' + (current - 1) + ')').show();
        function openIndex(i, direction) {
            if (!onGoing && next != i) {
                onGoing = true;
                next = i;
                if (direction == 'up') {
                    outClass = 'rotateCubeBottomOut top';
                    inClass = 'rotateCubeBottomIn';
                } else {
                    outClass = 'rotateCubeTopOut top';
                    inClass = 'rotateCubeTopIn';
                }
                show();
            }
        }
        function show() {
            $('#cubeTransition>div:eq(' + (current - 1) + ')').addClass(outClass);
            $('#cubeTransition>div:eq(' + (next - 1) + ')').addClass(inClass);
            // $('#bullets>li:eq(' + (current - 1) + ')').removeClass('active');
            // $('#bullets>li:eq(' + (next - 1) + ')').addClass('active');
            $('#cubeTransition>div:eq(' + (next - 1) + ')').show();
            // animationOut(current - 1)
            setTimeout(function() {
                $('#cubeTransition>div:eq(' + (current - 1) + ')').hide();
            }, 500)
            setTimeout(function() {
                $('#cubeTransition>div:eq(' + (current - 1) + ')').removeClass(outClass);
                $('#cubeTransition>div:eq(' + (next - 1) + ')').removeClass(inClass);
                // animationIn(next - 1)
                current = next;
                onGoing = false;
                var people = $("#page"+currentPage).find(".people").eq(0);
                sayQuestion(people);
            }, 800)
        }

        function goPAGE() {
            if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
                /*window.location.href="你的手机版地址";*/
                return true;
            }
            else {
                /*window.location.href="你的电脑版地址";    */
                return false;
            }
        }
    })
</script>
<?= Html::jsFile("@web/js/cubeTransition.js") ?>
<?= Html::jsFile("@web/js/modernizr-2.8.3.min.js") ?>
<script>
    function startPlayBg() {
        window.requestAnimFrame = (function() {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
        })();
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        var W = window.innerWidth,
            H = window.innerHeight;
        canvas.width = W;
        canvas.height = H;
        var particleCount = 100,
            particles = [],
            minDist = 70,
            dist;
        function paintCanvas() {
            ctx.clearRect(0, 0, W, H);
        }
        function Particle() {
            this.x = Math.random() * W;
            this.y = Math.random() * H;
            this.vx = -1 + Math.random() * 2;
            this.vy = -1 + Math.random() * 2;
            this.radius = 4;
            this.draw = function() {
                ctx.fillStyle = "rgba(200,200,200,0.3)";
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                ctx.fill();
            }
        }
        for (var i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }
        function draw() {
            paintCanvas();
            for (var i = 0; i < particles.length; i++) {
                p = particles[i];
                p.draw();
            }
            update();
        }
        function update() {
            for (var i = 0; i < particles.length; i++) {
                p = particles[i];
                p.x += p.vx;
                p.y += p.vy
                if (p.x + p.radius > W)
                    p.x = p.radius;
                else if (p.x - p.radius < 0) {
                    p.x = W - p.radius;
                }
                if (p.y + p.radius > H)
                    p.y = p.radius;
                else if (p.y - p.radius < 0) {
                    p.y = H - p.radius;
                }
                for (var j = i + 1; j < particles.length; j++) {
                    p2 = particles[j];
                    distance(p, p2);
                }
            }
        }
        function distance(p1, p2) {
            var dist, colorIndex;
            dx = p1.x - p2.x;
            dy = p1.y - p2.y;
            dist = Math.sqrt(dx * dx + dy * dy);
            if (dist <= minDist) {
                ctx.beginPath();
                colorIndex = parseInt((100.0 * dist / minDist)) + 25;
                ctx.strokeStyle = "hsla(200," + colorIndex + "%,50%," + (1.100 - dist / minDist) + ")";
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(p2.x, p2.y);
                ctx.stroke();
                var ax = dx / 2000,
                    ay = dy / 2000;
                p1.vx -= ax;
                p1.vy -= ay;
                p2.vx += ax;
                p2.vy += ay;
            }
        }
        function animloop() {
            draw();
            requestAnimFrame(animloop);
        }
        animloop();
    }
//    startPlayBg();
</script>

<?= CacheConfig::getConfigCache("baidu_tongji") ?>
