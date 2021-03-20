(function ($) {
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
    /*jQuery对象添加  runNum  方法*/
    $.fn.extend({
        /*
         *	滚动数字
         *	@ val 值，	params 参数对象
         *	params{addMin(随机最小值),addMax(随机最大值),interval(动画间隔),speed(动画滚动速度),width(列宽),height(行高)}
         */
        runNum:function (val,params) {
            /*初始化动画参数*/
            var valString = val || '70225800';
            var par= params || {};
            var runNumJson={
                el:$(this),
                value:valString,
                valueStr:valString.toString(10),
                width:par.width || goPAGE() ? 12 : 16,
                height:par.height || goPAGE() ? 30 : 50,
                addMin:par.addMin || 1,
                addMax:par.addMax || 9,
                interval:par.interval || 3000,
                speed:par.speed || 1000,
                length:valString.toString(10).length,
                type:par.type || 1
            };
            $._runNum._list(runNumJson.el,runNumJson);
            $._runNum._interval(runNumJson.el.children("li"),runNumJson);
        }
    });
    /*jQuery对象添加  _runNum  属性*/
    $._runNum={
        /*初始化数字列表*/
        _list:function (el,json) {
            var str='';
            for(var i=0; i<json.length;i++){
                var w=json.width*i;
                var t=json.height*parseInt(json.valueStr[i]);
                var h=json.height*10;
                str +='<li style="width:'+json.width+'px;left:'+w+'px;top: '+-t+'px;height:'+h+'px;">';
                for(var j=0;j<10;j++){
                    str+='<div style="height:'+json.height+'px;line-height:'+json.height+'px;">'+j+'</div>';
                }
                str+='</li>';
            }
            el.html(str);
            el.css("width",json.width*json.length+"px");
        },
        /*生成随即数*/
        _random:function (json) {
            var Range = json.addMax - json.addMin;
            var Rand = Math.random();
            var num=json.addMin + Math.round(Rand * Range);
            return num;
        },
        /*执行动画效果*/
        _animate:function (el,value,json) {
            for(var x=0;x<json.length;x++){
                var topPx=value[x]*json.height;
                el.eq(x).animate({top:-topPx+'px'},json.speed);
            }
        },
        /*定期刷新动画列表*/
        _interval:function (el,json) {
            var val=json.value;
            setInterval(function () {
                val+=$._runNum._random(json);
                if(json.type == 1){
                    window.localStorage.zhenjia_tiyan_num = val;
                }else{
                    window.localStorage.zhenjia_soft_num = val;
                }
                $._runNum._animate(el,val.toString(10),json);
            },json.interval);
        }
    }
})(jQuery);