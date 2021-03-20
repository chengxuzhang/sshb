//h5视频播放
var agent = navigator.userAgent;
var isIphone = ((agent.indexOf('iPhone') != -1) || (agent.indexOf('iPod') != -1)) ;
$videoTag = "";
if(isIphone) {
    $videoTag = '<video controls autoplay preload="metadata">';
} else {
    $videoTag = '<video controls preload="metadata">';
}

//点击视频播放
$(function(){
    $('.index_playvideo').click(function(){
        $('.index_play').css('display','block');
        $('video').get(1).play();
    })
})
$(function(){
    var i = 1;
    $('.bf').click(function(){

        if(i==1){
            $('video').get(1).play();
            $('.bf').css('display','none')
            i=0
        }else{
            $('video').get(1).pause();
            i=1;
        }

    })
})


//点击回到第一屏
$(function(){
    $(".backToTop").click(function(){
        $('#wrap').fullpage.moveTo(1);
    });
});

//顶部点击搜索效果
$(function(){

    $(window).scroll(function(){
        var sc=$(window).scrollTop();
        if(sc>10){
            $('.vr_nav').addClass("navbar-fixed-top");
        }else{
            $('.vr_nav').removeClass("navbar-fixed-top");
        }
    })
});

//顶部点击搜索效果
$(function(){

    $(".backToTop_1").click(function(){
        var sc=$(window).scrollTop();
        $('body,html').animate({scrollTop:0},500);
    });
});

//点击翻页
$(function(){
    $(".yy_right").each(function(){
        $(this).click(function(){
            $(this).parent().parent().find('.yy_cjwt_page1').css('display','none');
            $(this).parent().parent().find('.yy_cjwt_page2').css('display','block');
            $(this).parent().parent().find('.yy_num').text('2');
        })
    });
    $(".yy_left").each(function(){
        $(this).click(function(){
            $(this).parent().parent().find('.yy_cjwt_page2').css('display','none');
            $(this).parent().parent().find('.yy_cjwt_page1').css('display','block');
            $(this).parent().parent().find('.yy_num').text('1');
        })
    });
});
//点击切换
$(function(){
    $(".bim_tab_3").hover(function(){
        $('.video_tab').css('display','block');
        $('.bim_tab_img1').css('display','none');
        $('.bim_tab_img2').css('display','none');
        $('.bim_tab_3').addClass('bim_act');
        $('.bim_tab_2').removeClass('bim_act');
        $('.bim_tab_1').removeClass('bim_act');
    },function(){
        $('.bim_tab_1').removeClass('bim_act');
        $('.bim_tab_2').removeClass('bim_act');
        $('.bim_tab_3').removeClass('bim_act');
    });
    $(".bim_tab_2").hover(function(){
        $('.video_tab').css('display','none');
        $('.bim_tab_img1').css('display','block');
        $('.bim_tab_img2').css('display','none');
        $('.bim_tab_2').addClass('bim_act');
        $('.bim_tab_1').removeClass('bim_act');
        $('.bim_tab_3').removeClass('bim_act');
    },function(){
        $('.bim_tab_1').removeClass('bim_act');
        $('.bim_tab_2').removeClass('bim_act');
        $('.bim_tab_3').removeClass('bim_act');
    });
    $(".bim_tab_1").hover(function(){
        $('.video_tab').css('display','none');
        $('.bim_tab_img1').css('display','none');
        $('.bim_tab_img2').css('display','block');
        $('.bim_tab_1').addClass('bim_act');
        $('.bim_tab_3').removeClass('bim_act');
        $('.bim_tab_2').removeClass('bim_act');
    },function(){
        $('.bim_tab_1').removeClass('bim_act');
        $('.bim_tab_2').removeClass('bim_act');
        $('.bim_tab_3').removeClass('bim_act');
    });
});

$(function(){
    $('.bim_tab_img3').click(function(){
        $('.bim_tab_img3').css('display','none')
    })
})

$(function(){
    $('.zj_about_menu').hover(function(){
        $('.zj_ejmenu').css('display','block');
    },function(){
        $('.zj_ejmenu').css('display','none');
    })
})
$(function(){
    $('.zj_guwm_menu').hover(function(){
        $('.zj_tmenu').css('display','block');
    },function(){
        $('.zj_tmenu').css('display','none');
    })
})
$(function(){
    $('.zj_bvmenu').hover(function(){
        $('.zj_bmenu').css('display','block');
    },function(){
        $('.zj_bmenu').css('display','none');
    })
})

$(function () {
    //弹出层
    $('.zj_sqty').on('click', function(){
        layer.open({
            type: 2,
            title: '',
            maxmin: false,
            shadeClose: true, //点击遮罩关闭层
            area : ['440px' , '500px'],
            content: 'online.html?type=0'
        });
    });

    $('.zj_sqty_1').on('click', function(){
        layer.open({
            type: 2,
            title: '',
            maxmin: false,
            shadeClose: true, //点击遮罩关闭层
            area : ['440px' , '500px'],
            content: 'online.html?type=1'
        });
    });


    $('.zj_sqty_2').on('click', function(){
        layer.open({
            type: 2,
            title: '',
            maxmin: false,
            shadeClose: true, //点击遮罩关闭层
            area : ['440px' , '500px'],
            content: 'online.html?type=2'
        });
    });

    $('.zj_sqty_3').on('click', function(){
        layer.open({
            type: 2,
            title: '',
            maxmin: false,
            shadeClose: true, //点击遮罩关闭层
            area : ['440px' , '500px'],
            content: 'online.html?type=3'
        });
    });
})

$(function(){
    $('.zixun').hover(function(){
        $('.zx_call').fadeToggle()
    })
})

//客服
$(function(){
    function openwin() {
        var seti = 'height=610,width=510,toolbar=no,menubar=no,scrollbars=no, resizable=false,location=no, status=no,', w = $(window).width(),h = $(window).height();
        seti += "top="+(h-610)/2+",left="+(w-510)/2;
        window.open ("http://www.sobot.com/chat/pc/index.html?sysNum=76a6ddfff1774aac9f95adce30f1c5d4", "newwindow", seti);
    }
    $(function(){
        $('.kf').click(function(){
            openwin();
        });
    });
});
//点击加载更多
$(function(){
    var x = 1;
    $('.cpdt_btn').click(function(){
        if(x==1){
            $('.item_2').css('display','block');
            $('.cpdt').css('height','5300px');
            x = 2;
        }else{
            $('.item_3').css('display','block');
            $('.cpdt').css('height','7000px');
            $('.cpdt_btn').css('display','none');
        }
    });
});

//点击加载更多
$(function(){
    var m = 1;
    $('.m_jzgd').click(function(){
        if(m == 1){
            $('.m_all_1').css('display','block');
            m = 2;
        }else if(m==2){
            $('.m_all_2').css('display','block')
            m = 3;
        }else if(m==3){
            $('.m_all_3').css('display','block')
            m = 4;
        }else if(m==4){
            $('.m_all_4').css('display','block')
            m = 5;
        }else if(m==5){
            $('.m_all_5').css('display','block')
            m = 6;
        }else if(m==6){
            $('.m_all_6').css('display','block')
            m = 7;
        }else if(m==7){
            $('.m_all_7').css('display','block')
            m = 8;
        }else if(m==8){
            $('.m_all_8').css('display','block')
            m = 9;
        }else if(m==9){
            $('.m_all_9').css('display','block')
            m = 10;
        }else if(m==10){
            $('.m_all_10').css('display','block')
            m = 11;
        }else if(m==11){
            $('.m_all_11').css('display','block')
            m = 12;
        }else if(m==12){
            $('.m_all_12').css('display','block')
            m = 13;
        }else if(m==13){
            $('.m_all_13').css('display','block')
            m = 14;
        }else{
            $('.m_all_14').css('display','block')
            $('.m_jzgd').css('display','none')
        }
    })
})

$(function(){
    var i=1;
    $('.navbar-toggle').click(function(){
        if(i==1){
            $('.m_dh').css('display','none');
            $('.m_dh1').css('display','inline-block')
            i=2;
        }else{
            $('.m_dh').css('display','inline-block');
            $('.m_dh1').css('display','none')
            i=1
        }
    })
})
$(function(){
    var j=1;
    $('.m_zhankai').click(function(){
        if(j==1){
            $(this).find('.m_zk').css('transform','rotate(45deg)');
            j=2;
        }else{
            $(this).find('.m_zk').css('transform','rotate(0deg)');
            j=1
        }
    })
})