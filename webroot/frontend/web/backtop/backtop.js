var backTop = function (options) {
    //素材家园独家编辑整理：www.sucaijiayuan.com
    var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\">" +
        "<a href=\"tencent://Message/?Uin="+options.qq+"&websiteName=4shb.com=&Menu=yes\" class=\"btns btn-qq\"></a>" +
        "<div class=\"btns btn-wx\">" +
        "<img class=\"pic\" src=\""+options.weixin+"\"/>" +
        "</div><div class=\"btns btn-phone\"><div class=\"phone\">"+options.phone+"</div></div>" +
        "<div class=\"btns btn-top\"></div></div>";
    $("body").append(tophtml);
    $("#izl_rmenu").each(function(){
        $(this).find(".btn-wx").mouseenter(function(){
            $(this).find(".pic").fadeIn("fast");
        });
        $(this).find(".btn-wx").mouseleave(function(){
            $(this).find(".pic").fadeOut("fast");
        });
        $(this).find(".btn-phone").mouseenter(function(){
            $(this).find(".phone").fadeIn("fast");
        });
        $(this).find(".btn-phone").mouseleave(function(){
            $(this).find(".phone").fadeOut("fast");
        });
        $(this).find(".btn-top").click(function(){
            $("html, body").animate({
                "scroll-top":0
            },"fast");
        });
    });
    var lastRmenuStatus=false;
    $(window).scroll(function(){//bug
        var _top=$(window).scrollTop();
        if(_top>200){
            $("#izl_rmenu").data("expanded",true);
        }else{
            $("#izl_rmenu").data("expanded",false);
        }
        if($("#izl_rmenu").data("expanded")!=lastRmenuStatus){
            lastRmenuStatus=$("#izl_rmenu").data("expanded");
            if(lastRmenuStatus){
                $("#izl_rmenu .btn-top").slideDown();
            }else{
                $("#izl_rmenu .btn-top").slideUp();
            }
        }
    });
};