<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $title;
?>

<style>
    .case-list *{
        box-sizing: content-box !important;
    }
</style>

<script>document.documentElement.style.fontSize = document.documentElement.clientWidth / 10 + 'px';</script>
<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    img{
        /*display: block;*/
        /*vertical-align: top;*/
        border: 0 none;
    }
    a{
        color: #000;
        text-decoration: none;
        /*display: block;*/
    }
    a:hover{
        text-decoration: none;
    }
    body{
        font-family: "Helvetica Neue","Microsoft Yahei",Helvetica,Arial,"Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;
    }
    ul,li{list-style: none;margin: 0;padding: 0;}
    .clearfix {
        *zoom: 1;
    }
    .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
    html{
        font-size:75px;
    }

    .wrapper{
        width:100%;
        overflow: hidden;
        position: relative;
    }
    .animated{
        opacity: 0;
    }

    .banner{
        width: 100%;
        height: 468px;
        position: relative;
        overflow: hidden;
    }
    .banner-bg{
        position: absolute;
        top: 0;
        left: 50%;
        margin-left: -999px;
        height: 100%;
        width: auto;
    }
    .banner-text{
        width: 1200px;
        margin: 0 auto;
        position: relative;
        padding-top: 199px;
        color: #fff;
    }

    .banner-pic1{
        width: 530px;
        height: auto;
        margin-bottom: 17px;
        opacity:0;
        z-index:11;
        position: relative;
    }
    .banner-pic2{
        width: 530px;
        height: auto;
        margin-bottom: 17px;
        opacity:0;
    }

    .fl01-title{
        width: 1200px;
        height: 50px;
        line-height: 50px;
        font-size: 39px;
        color: #000;
        text-align: center;
        letter-spacing: 2px;
        margin: 57px 0 54px 0;
    }


    .arrow-right{display: none;}
    .tab-wrap{width: 1200px; margin: 40px auto 60px; overflow: hidden;}
    .nav{margin-bottom: 50px;width: 1218px;height: 47px;}
    .nav-title, .nav-span {float: left; margin-right: 17px;height: 47px; line-height: 47px; width: 224px; font-size: 18px; text-align: center; color: #000;background: #f3f4f7;cursor: pointer;}
    .tab-con{position: relative;}
    .tab-li{display: none; height: auto; width: 1200px;}
    .tab-li02{ height: auto; width: 1200px;}
    .nav-title.select {background: #dde3ef; color: #000;}
    .select{background: #dde3ef; color: #000;}
    .tab-li.show {display: block;}
    .tab-li02.show {display: block;}
    .case-cont a{
        width: 392px;
        height: 491px;
        float: left;
        margin: 0 10px 10px 0;
    }
    .case-list{
        max-width: 1200px;
        margin: 0 auto;
    }

    .case-cont {
        width: 1400px;
    }
    .case-cont li{
        /*opacity: 0;*/
        float: left;
        width: 392px;
        height: 491px;
        margin: 0 10px 10px 0;
    }
    .case-cont a{
        display: block;
        width: 392px;
        height: 491px;
        position: relative;
    }
    .case-pic{
        width: 392px;
        height: 300px;
        position: relative;
    }
    .case-btm{
        width: 268px;
        height: 191px;
        line-height: 24px;
        font-size: 14px;
        text-align: center;
        color: #333;
        padding: 0 60px;
        border: 2px solid #eee;
        border-top: 0 none;
        overflow: hidden;
        background: #fff;
    }
    .case-logo{
        width: 268px;
        height: 90px;
        margin: 0 auto;
    }
    .case-text{
        padding: 0 20px;
    }


    .tab-content{width: 100%; height:468px;position: relative;overflow: hidden;}
    .tab-pannel{width: 1200px;  height: 468px;float: left;}
    .slider-pic{width: 1200px;  height: 468px;font-size: 0;}
    /*轮播小点点*/
    .tab-nav{
        width: 100%;
        position: absolute;
        left: 0;
        bottom:7px;
        overflow: hidden;
        z-index: 1;
        text-align: center;
        font-size: 0;
    }
    .tab-nav li{
        width: 12px;
        height: 12px;
        line-height: 12px;
        display: inline-block;
        border-radius: 50%;
        margin-right: 15px;
        overflow: hidden;
        background:#fff;
    }
    .tab-nav li.active{
        width: 12px;
        height: 12px;
        background: url("//img.alicdn.com/tfs/TB1_pmqRpXXXXcuXXXXXXXXXXXX-12-12.png");
    }




    /*celeb*/
    .character{
        width: 100%;
        height: auto;
        background: #e2e2e2;
        position: relative;
        overflow: hidden;
    }
    .character .char-people{
        width: 100%;
    }
    .character .char-people img{
        display: block;
    }
    .character .show2{
        display: none;
    }
    .character .art{
        display: block;
    }
    .character1{
        display: none;
    }


    /*-------------动画------------*/
    .animated{
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    .animet{
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -o-animation-duration: 1s;
        -ms-animation-duration: 1s;
        -moz-animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        -o-animation-fill-mode: both;
        -ms-animation-fill-mode: both;
        -moz-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    .animet2{
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -o-animation-duration: 2s;
        -ms-animation-duration: 2s;
        -moz-animation-duration: 2s;
        -webkit-animation-fill-mode: both;
        -o-animation-fill-mode: both;
        -ms-animation-fill-mode: both;
        -moz-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    @-moz-keyframes art {
        0% {
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            opacity:0;
            filter: alpha(opacity=0);
        }
        100% {
            transform: translate3d(20px,0,0);
            -webkit-transform: translate3d(20px,0,0);
            -moz-transform: translate3d(20px,0,0);
            -ms-transform: translate3d(20px,0,0);
            -o-transform: translate3d(20px,0,0);
            filter: alpha(opacity=100);
            opacity:1;
        }
    }
    @-ms-keyframes art {
        0% {
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            opacity:0;
            filter: alpha(opacity=0);
        }
        100% {
            transform: translate3d(20px,0,0);
            -webkit-transform: translate3d(20px,0,0);
            -moz-transform: translate3d(20px,0,0);
            -ms-transform: translate3d(20px,0,0);
            -o-transform: translate3d(20px,0,0);
            filter: alpha(opacity=100);
            opacity:1;
        }
    }
    @-o-keyframes art {
        0% {
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            opacity:0;
            filter: alpha(opacity=0);
        }
        100% {
            transform: translate3d(20px,0,0);
            -webkit-transform: translate3d(20px,0,0);
            -moz-transform: translate3d(20px,0,0);
            -ms-transform: translate3d(20px,0,0);
            -o-transform: translate3d(20px,0,0);
            filter: alpha(opacity=100);
            opacity:1;
        }
    }
    @-webkit-keyframes art {
        0% {
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            opacity:0;
            filter: alpha(opacity=0);
        }
        100% {
            transform: translate3d(20px,0,0);
            -webkit-transform: translate3d(20px,0,0);
            -moz-transform: translate3d(20px,0,0);
            -ms-transform: translate3d(20px,0,0);
            -o-transform: translate3d(20px,0,0);
            filter: alpha(opacity=100);
            opacity:1;
        }
    }
    @keyframes art {
        0% {
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            opacity:0;
            filter: alpha(opacity=0);
        }
        100% {
            transform: translate3d(20px,0,0);
            -webkit-transform: translate3d(20px,0,0);
            -moz-transform: translate3d(20px,0,0);
            -ms-transform: translate3d(20px,0,0);
            -o-transform: translate3d(20px,0,0);
            filter: alpha(opacity=100);
            opacity:1;
        }
    }
    .art {
        -webkit-animation-name: art;
        -o-animation-name: art;
        -moz-animation-name: art;
        -ms-animation-name: art;
        animation-name: art;
        -webkit-animation-timing-function: ease-out;
        -ms-animation-timing-function: ease-out;
        -o-animation-timing-function: ease-out;
        -moz-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    @-webkit-keyframes art1 {
        0% {
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            opacity:0;
            filter: alpha(opacity=0);
        }
        100% {
            transform: translate3d(0px,0,0);
            -webkit-transform: translate3d(0px,0,0);
            -moz-transform: translate3d(0px,0,0);
            -ms-transform: translate3d(0px,0,0);
            -o-transform: translate3d(0px,0,0);
            filter: alpha(opacity=100);
            opacity:1;
        }
    }
    @keyframes art1 {
        0% {
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            opacity:0;
            filter: alpha(opacity=0);
        }
        100% {
            transform: translate3d(0px,0,0);
            -webkit-transform: translate3d(0px,0,0);
            -moz-transform: translate3d(0px,0,0);
            -ms-transform: translate3d(0px,0,0);
            -o-transform: translate3d(0px,0,0);
            filter: alpha(opacity=100);
            opacity:1;
        }
    }
    .art1 {
        -webkit-animation-name: art1;
        -o-animation-name: art1;
        -moz-animation-name: art1;
        -ms-animation-name: art1;
        animation-name: art1;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -o-animation-duration: 2s;
        -ms-animation-duration: 2s;
        -moz-animation-duration: 2s;
        -webkit-animation-timing-function: ease-out;
        -ms-animation-timing-function: ease-out;
        -o-animation-timing-function: ease-out;
        -moz-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    @-webkit-keyframes lightSpeedIn {
        0% {
            -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
            transform: translate3d(-100%, 0, 0) skewX(-30deg);
            opacity: 0;
        }

        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
            opacity: 1;
        }

        100% {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
        }
    }
    @keyframes lightSpeedIn {
        0% {
            -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
            transform: translate3d(-100%, 0, 0) skewX(-30deg);
            opacity: 0;
        }

        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
            opacity: 1;
        }

        100% {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
        }
    }
    @-webkit-keyframes lightSpeedIn2 {
        0% {
            -webkit-transform: translate3d(100%,0,0) skewX(-30deg);
            transform: translate3d(100%,0,0) skewX(-30deg);
            opacity: 0
        }

        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1
        }

        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
            opacity: 1
        }

        100% {
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }
    @keyframes lightSpeedIn2 {
        0% {
            -webkit-transform: translate3d(100%,0,0) skewX(-30deg);
            transform: translate3d(100%,0,0) skewX(-30deg);
            opacity: 0
        }

        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1
        }

        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
            opacity: 1
        }

        100% {
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }
    .lightSpeedIn{
        -webkit-animation-name: lightSpeedIn;
        animation-name: lightSpeedIn;
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    .lightSpeedIn2 {
        -webkit-animation-name: lightSpeedIn2;
        animation-name: lightSpeedIn2;
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }


    /*--------试配----------*/

    @media (max-width: 1200px) and (min-width: 990px){

        .banner-text {
            width: 90%;
            margin: 0 auto;
            padding-top: 13%;
        }
        .fl01-title{width: 990px;}
        .tab-wrap{width: 990px; margin: 40px auto 50px;}
        .nav{margin-bottom: 40px;width: 1000px;}
        .nav-title {margin-right: 6px;width: 160px;}
        .nav-span {margin-right: 6px;width: 160px;}
        .tab-li{width: 990px;height: 386px;}
        .tab-li02{width: 990px;}

        .tab-content, .tab-pannel{width: 990px;}
        .tab-content{height:386px;position: relative;overflow: hidden;}
        .slider-pic{width: 990px; height: 386px;}

        .case-list{max-width: 990px;}
        .case-cont {
            width: 1100px;
        }
        .case-cont li{
            width: 320px;
            height: 383px;
            margin: 0 15px 15px 0;
        }
        .case-pic{
            width: 320px;
            height: 227px;
            position: relative;
        }
        .case-btm{
            width: 316px;
            height: 154px;
            line-height: 20px;
            font-size: 14px;
            padding: 0;
        }
        .case-logo{
            width: 230px;
            height: 77px;
        }
        .case-text{
            padding: 0 20px;
        }
    }

    @media (max-width: 990px) and (min-width: 768px) {
        .tab-wrap{width: 750px; margin: 40px auto 40px;}
        .fl01-title{width: 750px;}
        .nav{margin-bottom: 30px;width: 800px;}
        .nav-title {margin-right: 6px;width: 120px;}
        .nav-span {margin-right: 6px;width: 120px;}
        .tab-li{width: 750px;height: 292px;}
        .tab-li02{width: 750px;}

        .tab-content, .tab-pannel{width: 750px;}
        .tab-content{height:292px;position: relative;overflow: hidden;}
        .slider-pic{width: 750px; height: 292px;}

        .case-list{
            max-width: 750px;
            margin: 0 auto;
        }
        .case-cont {
            width: 800px;
        }
        .case-cont li{
            width: 365px;
            height: 437px;
            margin: 0 20px 20px 0;
        }
        .case-pic{
            width: 365px;
            height: 260px;
        }
        .case-btm{
            width: 361px;
            height: 177px;
            line-height: 24px;
            font-size: 14px;
            padding: 0;
        }
        .case-logo{
            width: 268px;
            height: 90px;
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) and (min-width: 750px) {
        .tab-wrap{width: 700px; margin: 40px auto 40px;}
        .fl01-title{width: 700px;}
        .nav{margin-bottom: 40px;width: 750px;}
        .nav-title {margin-right: 5px;width: 113px;font-size: 16px;}
        .nav-span {margin-right: 5px;width: 113px;font-size: 16px;}
        .tab-li{width: 700px;height: 273px;}
        .tab-li02{width: 700px;}

        .tab-content, .tab-pannel{width: 700px;}
        .tab-content{height:273px;position: relative;overflow: hidden;}
        .slider-pic{width: 700px; height: 273px;}

        .case-list{max-width: 700px;}
        .case-cont {
            width: 750px;
        }
        .case-cont li{
            width: 340px;
            height: 419px;
            margin: 0 20px 20px 0;
        }
        .case-pic{
            width: 340px;
            height: 241px;
            position: relative;
        }
        .case-btm{
            width: 336px;
            height: 178px;
            line-height: 22px;
            font-size: 14px;
            padding: 0;
        }
        .case-logo{
            width: 230px;
            height: 77px;
        }
        .case-text{
            padding: 0 30px;
        }
    }

    @media (max-width: 750px) {
        body,html{
            overflow-x: hidden;
            -webkit-overflow-scrolling : touch;
        }

        .banner {
            height: 6.24rem;
        }
        .banner-bg{
            margin-left: -13.32rem;
        }
        .banner-text {
            padding-top: 18%;
        }
        .banner-pic1{
            width: 7.06rem;
            margin-bottom: 0.5rem;
            margin-left:.5rem;
        }
        .banner-pic2{
            width: 7.06rem;
            margin-left:.5rem;
        }

        .tab-wrap{
            width: 100%;
            margin: 1rem auto .9rem;
            position: relative;
        }
        .fl01-title{
            width: 10rem;
            height:.6rem;
            line-height: 0.6rem;
            letter-spacing: .026rem;
            margin: .1rem 0 .72rem 0;
            font-size: 0.6rem;
        }
        .arrow-right{
            display:none;
            display: block;
            width: .42rem;
            height: .66rem;
            position: absolute;
            top:0;
            right:0;
            background: #f3f4f7;
        }
        .arrow-right img{
            width: .29rem;
            height: .54rem;
            margin: .065rem 0 0 .1rem;
        }
        .nav{
            display:none;
        }

        .tab-con{position: relative;height: 3.89rem;width: 100% !important;}
        .tab-li{display: none; height: 100%; width: 100%;overflow: hidden;}
        .tab-li.show {display: block;}

        .tab-content{width: 100%;height: 3.89rem; position: relative;overflow: hidden;}
        .tab-pannel{width:10rem;height: 3.89rem;float: left;}
        .slider-pic{width: 10rem;height: 3.89rem;  }


        /*轮播小点点*/
        .tab-nav{bottom:.11rem;}
        .tab-nav li{
            width: .2rem;
            height: .2rem;
            line-height: .2rem;
            margin-right: .2rem;
        }
        .tab-nav li.active{
            width: .2rem;
            height: .2rem;
            background: url("//img.alicdn.com/tfs/TB1_pmqRpXXXXcuXXXXXXXXXXXX-12-12.png");
            background-size: 100% 100%;
        }


        .tab-con02{position: relative;}
        .tab-con02-pc{display: none;}
        .tab-con02-m{display: block;}
        .tab-li02{display: none; height: 10.5rem; width: 8.28rem;margin:0 auto;overflow: hidden;}
        .tab-li02.show {display: block;}
        .tab-content{width: 100%;height: 10.5rem; position: relative;overflow: hidden;}
        .tab-pannel02{width: 8.28rem;height: 10.5rem;float: left;}
        .case-pic{width: 8.28rem;height:5.89rem;}
        .case-btm{width: 8.18rem;height: 4.5rem;padding: 0;font-size: .32rem;line-height:.6rem;}
        .case-logo{width: 7.14rem;height:2.4rem;}
        .case-text{padding:0 .32rem;}

        .left{
            width: 0.21rem;
            height: 0.36rem;
            background: url("//gw.alicdn.com/tfs/TB1DyJ.RXXXXXcfapXXXXXXXXXX-16-27.jpg") center no-repeat;
            background-size: 100% 100%;
            position: absolute;
            top:50%;
            left: .25rem;
        }
        .right{
            width: 0.21rem;
            height: 0.36rem;
            background: url("//gw.alicdn.com/tfs/TB1Ov1RRXXXXXXfXpXXXXXXXXXX-16-27.jpg") center no-repeat;
            background-size: 100% 100%;
            position: absolute;
            top:50%;
            right: .25rem;
        }


        .character{
            display: none;
        }
        .character1{
            display: block;
            width: 100%;
            height: auto;
            background: #e2e2e2;
            position: relative;
            overflow: hidden;
        }
        .character1 .char-people{
            width: 100%;
        }
        .character1 .char-people img{
            display: block;
        }
        .character1 .show1{
            display: none;
        }
        .character1 .art1{
            display: block;
        }

    }
</style>
<!--无线端案例汇总-->
<style>
    html{
        font-size: 75px;
    }
    body{font-family:"SourceHanSansCN", "PingFang","Helvetica Neue", Helvetica, STHeiTi, "Microsoft YaHei", Arial, sans-serif;}
    *{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    img{
        /*display: block;*/
        /*vertical-align: top;*/
        border: 0 none;
    }
    li{
        list-style: none;
    }
    a{
        /*display: block;*/
        color: #000;
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    .clearfix {
        *zoom: 1;
    }
    .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
    .cyx-m-case{
        display:none;
    }
    @media (max-width: 750px){
        .cyx-m-case{
            display: block;
        }
    }
    .m-control-box{
        width: 100%;
        height: 1.4rem;
    }
    .m-control{
        padding-top: 0.5rem;
        width: 100%;
        height: 0.9rem;
        position: relative;
        margin: 0 auto;
        background: #fff;
        padding-left: 0.5rem;
    }
    .m-control-fixed{
        position: fixed;
        top: 0;
        left: 0;
    }
    .m-control-current{
        width: 9rem;
        height: 0.8rem;
        border: #eee 1px solid;
        font-size: 0.5rem;
        line-height: 0.8rem;
        text-align: center;
        position: relative;
    }
    .m-control-current i{
        font-style: normal;
    }
    .m-control-current span{
        position: absolute;
        top: 0;
        right: 0;
        width: 0.8rem;
        height: 100%;
        background: url(https://gw.alicdn.com/tfs/TB1dYB.QpXXXXXVapXXXXXXXXXX-46-24.png) center no-repeat;
        background-size: auto 0.16rem;
        transition: transform .5s;
    }
    .m-control-current .show{
        transform: rotate(180deg);
    }
    .m-control-list{
        display: none;
        position: absolute;
        top: 100%;
        left: 0.5rem;
        background: #fff;
        border: #eee solid;
        border-width: 0 1px 1px 1px;
    }
    .m-control-list li{
        width: 9rem;
        height: 0.6rem;
        margin: 0 auto;
        font-size: 0.32rem;
        line-height: 0.6rem;
        text-align: center;
    }
    .m-cont{
        width: 10rem;
        overflow: hidden;
    }
    .m-cont-title{
        font-size: 0.5rem;
        height: 0.5rem;
        line-height: 0.5rem;
        color: #000;
        text-align: center;
        padding: 0.5rem 0;
    }
    .m-cont ul{
        width: 11rem;
    }
    .m-item{
        float: left;
        width: 4.92rem;
        margin: 0 0.06rem 0.16rem 0.04rem;
    }
    .m-cont a{
        display: block;
        width: 100%;
        height: 100%;
    }
    .m-item-pic{
        width: 100%;
        height: 3.765rem;
    }
    .m-item-cont{
        box-sizing:border-box;
        width: 100%;
        border: #eee solid;
        border-width: 0 2px 2px 2px;
        padding-bottom: 0.3rem;
    }
    .m-item-logo{
        width: 3.44rem;
        height: 1.2rem;
        margin: 0 auto;
        padding-top: .1rem;
    }
    .m-item-logo p{
        height: .8rem;
        line-height: 0.4rem;
        color: #000;
        font-size: .35rem;
        text-align: center;
        overflow: hidden;
        padding-top: .2rem;
    }
    .m-item-desc{
        width: 3.68rem;
        height: 1.24rem;
        line-height: 0.322rem;
        font-size: 0.29rem;
        padding-top: .2rem;
        margin: 0 auto;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
    }

</style>

<style>

    .scrolly{
        height:100%;
        overflow:hidden;
    }
    .tcvideo{
        display: none;
        width: 100%;
        z-index:3333333;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        filter:progid:DXImageTransform.Microsoft.gradient(enabled='true',startColorstr='#66000000', endColorstr='#66000000');background:rgba(0,0,0,0.7);
    }
    .x_close{
        width: 30px;
        height: 30px;
        position: absolute;
        top: 30px;
        right: 30px;
        color: #fff;
        text-align: center;
        line-height: 30px;
        font-size:30px;
        cursor: pointer;
    }
    .video_main{
        height: 684px;
        position: fixed;
        top: 100px;
        right: 100px;
        left: 100px;
        background: #000;
    }
    .video_title{
        position: absolute;
        left: 0;
        top: 0;
        color: #fff;
        font-size: 28px;
    }
    .video_left{
        position: absolute;
        right: 440px;
        left: 0px;
        top: 0px;
        bottom: 60px;
        width: auto;
        height: auto;
    }
    .video_left_main{
        width: 1280px;
        height: 720px;
    }
    .video{
        position: absolute;
        top: 40px;
        left: 0px;
        width: 100%;
        height: 100%;
    }
    .video_right{
        position: absolute;
        top: 0px;
        right: 0px;
        z-index: 3003;
        width: 440px;
        height: 100%;
    }
    .video_right_main{
        height: 100%;
        overflow-y: scroll;
    }
    .video_right_list{
        padding-left: 40px;
        height: 100px;
        position: relative;
        margin-top: 30px;
        color: rgb(255, 255, 255);
        cursor: pointer;
    }
    .video_fm_pic{
        width: 180px;
        height: 100px;
        float: left;
    }
    .video_text{
        overflow: hidden;
        padding: 0 10px;
        font-size: 14px;
    }
    .pvl-list-item-time{
        position: absolute;
        right: 170px;
        bottom: 0;
        font-size: 12px;
    }
    .textshow{
        color: #3978f7;
    }
    .sjxshow{
        position: absolute;
        left: 15px;
        top: 45px;
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-left: 10px solid #3978f7;
        border-bottom: 10px solid transparent;
    }
    ::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }
    .m_tcvideo{
        display: none;
    }
    @media (max-width: 750px) {
        .m_tcvideo{
            display: none;
            width: 10rem;
            height: 25.6rem;
            position: fixed;
            top: 0;
            left: 0;
            z-index:111;
            filter:progid:DXImageTransform.Microsoft.gradient(enabled='true',startColorstr='#66000000', endColorstr='#66000000');background:rgba(0,0,0,0.7);
        }
        .tcvideo{
            display: none;
        }
        .m_video_left{
            width: 10rem;
            height: 5.6rem;
            margin-top: 2rem;
        }
        .m_video_left_main{
            width: 10rem;
            height: 5.6rem;

        }
        .m_video_main{
            width: 10rem;
            height: 12rem;
            background: #000;
        }
        .m_video{
            width: 100%;
            height: 5.6rem;
            margin-top: 0.5rem;
        }
        /*    .m_video_right {
                 height:0.937rem;
                overflow: hidden;
                font-size: 0;
                display: -webkit-box;
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
            }*/
        ::-webkit-scrollbar{
            display:none;
        }
        .m_video_right_main{
            padding-top: 1rem;
            height:4.5rem;
            overflow: hidden;
            font-size: 0;
            display: -webkit-box;
            overflow-x: scroll;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            margin-top: 0.2rem;
        }
        .m_video_right_list{
            position: relative;
            width: 4.5rem;
            height: 4.5rem;
            margin-left: 0.2rem;
        }
        .m_video_fm_pic{
            width: 4.5rem;
            height: 2.5rem;
        }
        .m_video_text{
            width: 4rem;
            margin: 0 auto;
            font-size: 0.24rem;
            color: #fff;
            margin-top: 0.2rem;
        }
        .m_pvl-list-item-time{
            width: 4.5rem;
            height: 0.24rem;
            line-height: 0.24rem;
            font-size: 0.24rem;
            color: #fff;
            position: absolute;
            bottom: 2rem;
            right: 0;
            filter:progid:DXImageTransform.Microsoft.gradient(enabled='true',startColorstr='#66000000', endColorstr='#66000000');background:rgba(0,0,0,0.4);
        }
        .m_textshow{
            color: #3978f7;
        }
        .m_sjxshow{
            position: absolute;
            left: 0.03rem;
            bottom: 1.5rem;
            width: 0;
            height: 0;
            border-top: 0.13rem solid transparent;
            border-left: 0.13rem solid #3978f7;
            border-bottom: 0.13rem solid transparent;
        }
        .m_x_close{
            position: fixed;
            font-size: 0.7rem;
            color: #fff;
            height: 0.7rem;
            width: 0.7rem;
            text-align: center;
            line-height: 0.3rem;
            top: 0.2rem;
            right: 0.2rem;
        }
        .m_video_title{
            font-size: 0.3rem;
            color: #fff;
            padding-top: 0.2rem;
        }
    }
</style>



<html>

<div class="wrapper">
    <script>document.documentElement.style.fontSize = document.documentElement.clientWidth / 10 + 'px';</script>
    <!--PC导航-->
    <style>
        body{font-family: "Helvetica Neue","Microsoft Yahei",Helvetica,Arial,"Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;}
        .clearfix {
            *zoom: 1;
        }
        .clearfix:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }
        * {
            margin: 0;
            padding: 0;
            border: 0 none;
            /*vertical-align: top;*/
        }
        .cyx-banner-nav{
            position: absolute;
            width: 1200px;
            top: 0;
            left: 50%;
            margin-left: -600px;
            z-index: 9999;
        }
        .cyx-banner-nav a{
            display: block;
            color: #fff;
            text-decoration: none;
        }
        .cyx-banner-nav li{
            list-style: none;
        }
        .cyx-banner-nav-logo{
            float: left;
            height: 42px;
            padding-left: 20px;
        }
        .cyx-banner-nav-logo img {
            height: 100%;
            width: auto;
        }
        .cyx-banner-nav-right{
            float: right;
        }
        .cyx-banner-nav-links .cyx-banner-nav-link{
            list-style: none;
            float: left;
            width: 114px;
            height: 49px;
            position: relative;
            margin: 0 10px;
            text-indent:6px;
        }
        .cyx-banner-nav-link:hover .cyx-banner-nav-link-item{
            border-bottom: rgba(255,255,255,0.6) 3px solid;
        }
        .cyx-banner-nav-link .cyx-banner-nav-link-item,.cyx-banner-nav-link .cyx-banner-nav-link-item{
            width: 100%;
            height: 18px;
            line-height: 18px;
            font-size: 18px;
            padding: 11px 0;
            color: #fff;
            text-align: left;
            cursor: pointer;
        }
        .cyx-banner-nav-cont{
            /*display: none;*/
            max-height: 0;
            overflow: hidden;
            max-width: 360px;
            position: absolute;
            left: 0;
            top: 43px;
            background: rgba(0,0,0,0.8);
            transition:max-height 1s;
            -webkit-transition:max-height 1s;
            -moz-transition:max-height 1s;
            -o-transition:max-height 1s;
            -ms-transition:max-height 1s;
        }
        .cyx-banner-nav-cont1{
            left: 0;
            top: 53px;
        }
        .cyx-banner-nav-cont2{
            left: auto;
            right: 0;
            top: 53px;
        }
        .cyx-banner-nav-link0:hover .cyx-banner-nav-cont0,.cyx-banner-nav-link3:hover .cyx-banner-nav-cont3,.cyx-banner-nav-link4:hover .cyx-banner-nav-cont4{
            max-height: 1000px;
        }
        .cyx-banner-nav-cont li{
            border-top: #6a6b6e 1px solid;
        }
        .cyx-banner-nav-cont0 li{
            /* width: 360px;*/
        }
        .cyx-banner-nav-cont a:hover{
            background: rgba(106,107,110,0.8);
        }
        .cyx-banner-nav-cont-main{
            float: left;
            width: 114px;
            line-height: 40px;
            text-align: left;
            font-size: 13px;
            text-indent:6px;
        }
        .cyx-banner-nav-cont-items{
            float: left;
            width: 240px;
            padding: 4px 0 5px 0;
        }
        .cyx-banner-nav-cont-items a{
            float: left;
            width: 50%;
            height: 36px;
            line-height: 36px;
            text-align: center;
            font-size: 12px;
            /*color: #b8bdca;*/
            color:#fff;
        }
        .cyx-banner-nav-cont-items .noContent{
            cursor: default;
        }
        .cyx-banner-nav-cont-items .noContent:hover{
            background: none;
            cursor: default;
        }
        .cyx-banner-nav-link0 .clearfix1 .cyx-banner-nav-cont-main1{
            line-height: 20px;

        }
        .cyx-banner-nav-link0 .clearfix1 .cyx-banner-nav-cont-main1 a{
            height:40px;
            padding: 4px 0;
        }
        @media (max-width: 1200px) {
            .cyx-banner-nav-link .cyx-banner-nav-link-item, .cyx-banner-nav-link .cyx-banner-nav-link-item{
                font-size:14px;
            }
            .cyx-banner-nav{
                width: 94%;
                top: 0;
                left: 3%;
                margin-left: 0;
            }
            .cyx-banner-nav-links .cyx-banner-nav-link {
                width: 100px;
                margin: 0;
            }
            .cyx-banner-nav-link a,.cyx-banner-nav-link p{
                width: 100px;
            }
            .cyx-banner-nav-cont0 li{
                /*width: 300px;*/
            }
            .cyx-banner-nav-cont-main{
                width: 100px;
            }

            .cyx-banner-nav-cont-items{
                width: 200px;
            }
            .cyx-banner-nav-link0 .clearfix1 .cyx-banner-nav-cont-main1{
                line-height: 20px;

            }
            .cyx-banner-nav-link0 .clearfix1 .cyx-banner-nav-cont-main1 a{
                height:40px;
                padding: 4px 0;
            }

        }
        @media (max-width: 750px) {
            .cyx-banner-nav{
                display: none;
            }
        }
        .pc-hide{
            display:none;
        }
        .cyx-banner-nav-links .cyx-banner-nav-link2{
            margin-right:40px;
        }
    </style>
    <!--无线端导航-->
    <style>
        body{font-family: "Helvetica Neue","Microsoft Yahei",Helvetica,Arial,"Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;}
        *{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img{
            /*display: block;*/
            /*vertical-align: top;*/
            border: 0 none;
        }
        li{
            list-style: none;
        }
        a{
            /*display: block;*/
            color: #000;
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        .clearfix {
            *zoom: 1;
        }
        .clearfix:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }
        .cyx-m-nav{
            display: none;
        }
        @media (max-width: 750px){
            body,html{
                -webkit-overflow-scrolling : touch;
            }
            .m-banner{
                width: 10rem;
                height: 100%;
                position: relative;
                display: block;
                overflow: hidden;
            }
            .cyx-m-nav{
                display: block;
                width: 10rem;
                min-height: 1.29rem;
                position: absolute;
                top: 0;
                left: 0;
                z-index:10;
            }
            .cyx-m-nav-bg img{
                position: absolute;
                width: 3.6rem;
                height: .56rem;
                top: 0.5rem;
                left: 0.56rem;
            }
            .cyx-m-show{
                background: url("//gw.alicdn.com/tfs/TB1.l6fRXXXXXcNXVXXXXXXXXXX-45-36.png");
                background-size: 100%;
                width: 0.57rem;
                height: 0.45rem;
                position: absolute;
                right: 0.53rem;
                top: 0.7rem;
                cursor: pointer;
            }
            .cyx-m-hide{
                background: url("//gw.alicdn.com/tfs/TB1REW8RXXXXXaGaXXXXXXXXXXX-46-46.png") no-repeat;
                background-size: 100%;
                width: 0.61rem;
                height: 0.61rem;
            }
            .cyx-m-nav-box{
                background: rgba(0,0,0,0.95);
                height: 0;
                overflow: hidden;
                transition: height .5s;
                -webkit-transition: height .5s; /* Safari */
            }
            .cyx-m-nav-list{
                width: 8.4rem;
                color: #fff;
                /*margin: 1.43rem auto 0 auto;*/
                padding: 1.43rem 0.8rem 0 0.8rem;
            }
            .cyx-m-nav-main{
                padding-top: .3rem;
            }
            .cyx-m-nav-link1{
                font-size: .45rem;
                line-height: 0.75rem;
                font-weight: bold;
                border-bottom: 1px solid #fff;
                position: relative;
                color: #fff;
            }
            .cyx-m-nav-link1 i{
                font-style: normal;
            }
            .cyx-m-nav-cont-box{
                overflow: hidden;
            }
            .cyx-m-nav-cont{
                padding: .1rem 0 0 0;
                border-bottom: #383839 1px solid;
            }
            .cyx-m-nav-link2{
                float: left;
                width: 3rem;
                padding-left: 0.5rem;
                height: 0.7rem;
                line-height: 0.7rem;
                color: #fff;
                font-size: 0.35rem;
            }
            .cyx-m-nav-cont1{
                height: 1.4rem;
            }
            .cyx-m-nav-link2 a{
                color: #fff;
            }
            .cyx-m-nav-link3{
                float: left;
                width: 5.3rem;
                padding-left: .5rem;
            }
            .cyx-m-nav-link3 a{
                float: left;
                width: 50%;
                height: 0.7rem;
                line-height: 0.7rem;
                font-size: .35rem;
                color: #b8bdca;
            }

        }
    </style>

    <!--nav-->
    <div class="row vr_nav bimvr_nav hidden-xs">
        <div class="vr_nav_con">
            <div class="col-lg-3 zj_logo hidden-xs"><h1><a href="/"><img src="../images/logo_bai.png"/></a></h1></div>
            <div class="col-lg-3 zj_logo_m visible-xs"><h1><img src="../images/logo_bai.png"/></h1></div>
            <ul class="col-lg-9 zj_menu hidden-xs">
                <!-- 头部开始 -->
                <?php echo $this->render('/common/_header'); ?>
                <!-- 头部结束 -->
            </ul>
        </div>
    </div>


    <!--无线端导航-->
    <div class="cyx-m-nav">
        <div class="cyx-m-nav-bg">
            <a href="//www.xinlingshou.cn/" target="_blank"><img src="https://gw.alicdn.com/tfs/TB1YxjkcntYBeNjy1XdXXXXyVXa-270-42.png" alt=" "></a>
            <div class="cyx-m-show"></div>
        </div>
        <div class="cyx-m-nav-box">
            <!-- <div class="cyx-m-nav-list">

                <div class="cyx-m-nav-main">

                    <p class="cyx-m-nav-link1"><i>产品中心</i></p>


                    <div class="cyx-m-nav-cont-box">

                        <div class="cyx-m-nav-cont cyx-m-nav-cont0 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont0">
                                <a href="//istore.alibaba.com?spm=a2114k.8786730.nav-zhmd.0" target="_blank">智慧门店</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont1 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont1">
                                <a href="javascript:void(0);" target="_blank">智慧快闪<br/>&nbsp;&nbsp;<span style="font-size:12px;">即将上线</span></a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont2 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont2">
                                <a href="//lingshoujia.com/?spm=a2114k.8786730.nav-zhcg.0" target="_blank">智慧场馆</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont3 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont3">
                                <a href="//databank.tmall.com?spm=a2114k.8786730.nav-sjyh.0" target="_blank">品牌数据银行</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont4 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont4">
                                <a href="//www.xinlingshou.cn/product/crm?spm=a2114k.8786730.nav-khyy.0" target="_blank">客户运营平台</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont5 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont5">
                                <a href="//retail.aliyun.comspm=a2114k.8786730.nav-lsy.0" target="_blank">零售云</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="cyx-m-nav-main">

                    <a href="//www.xinlingshou.cn/showcase?spm=a2114k.8786730.nav-khal.0" class="cyx-m-nav-link1" target="_blank"><i>客户案例</i></a>


                </div>

                <div class="cyx-m-nav-main">

                    <a href="//www.xinlingshou.cn/intopic?spm=a2114k.8786730.nav-gkk.0" class="cyx-m-nav-link1" target="_blank"><i>新零售公开课</i></a>


                </div>

                <div class="cyx-m-nav-main">

                    <a href="//open.taobao.com?spm=a2114k.8786730.nav-open.0" class="cyx-m-nav-link1" target="_blank"><i>开放合作</i></a>


                </div>

                <div class="cyx-m-nav-main">

                    <p class="cyx-m-nav-link1"><i>联系我们</i></p>


                    <div class="cyx-m-nav-cont-box">

                        <div class="cyx-m-nav-cont cyx-m-nav-cont0 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont0">
                                <a href="//anyservice.taobao.com/alikey/p_c_alikey_portal.htm?spm=a2114k.8786730.nav-sj.0" target="_blank">我是商家</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont1 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont1">
                                <a href="//open.taobao.com/support/createOrEditProblem.htm?spm=a2114k.8786730.nav-isvl.0" target="_blank">我是服务商</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="cyx-m-nav-main">

                    <a href="//www.xinlingshou.cn/zhaopin" class="cyx-m-nav-link1" target="_blank"><i>加入我们</i></a>


                </div>

            </div> -->
            <div class="cyx-m-nav-list">

                <div class="cyx-m-nav-main">

                    <p class="cyx-m-nav-link1"><i>产品中心</i></p>


                    <div class="cyx-m-nav-cont-box">

                        <div class="cyx-m-nav-cont cyx-m-nav-cont0 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont0" data-spm="nav-zhmd-m">
                                <a href="//istore.alibaba.com" target="_blank">智慧门店</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont1 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont1">
                                <a href="javascript:void(0);" target="_blank">智慧快闪<br>&nbsp;&nbsp;<span style="font-size:12px;">即将上线</span></a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont2 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont2" data-spm="nav-zhcg-m">
                                <a href="//lingshoujia.com/index" target="_blank">智慧场馆</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont3 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont3" data-spm="nav-sjyh-m">
                                <a href="//databank.tmall.com" target="_blank">品牌数据银行</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont4 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont4" data-spm="nav-khyy-m">
                                <a href="//www.xinlingshou.cn/product/crm" target="_blank">客户运营平台</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont5 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont5" data-spm="nav-lsy-m">
                                <a href="//retail.aliyun.com" target="_blank">零售云</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="cyx-m-nav-main" data-spm="nav-khal-m">

                    <a href="//www.xinlingshou.cn/showcase" class="cyx-m-nav-link1" target="_blank"><i>客户案例</i></a>


                </div>

                <div class="cyx-m-nav-main" data-spm="nav-gkk-m">

                    <a href="//www.xinlingshou.cn/intopic" class="cyx-m-nav-link1" target="_blank"><i>新零售公开课</i></a>


                </div>

                <div class="cyx-m-nav-main" data-spm="nav-open-m">

                    <a href="//open.taobao.com" class="cyx-m-nav-link1" target="_blank"><i>开放合作</i></a>


                </div>

                <div class="cyx-m-nav-main">

                    <p class="cyx-m-nav-link1"><i>联系我们</i></p>


                    <div class="cyx-m-nav-cont-box">

                        <div class="cyx-m-nav-cont cyx-m-nav-cont0 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont0" data-spm="nav-sj-m">
                                <a href="//anyservice.taobao.com/alikey/p_c_alikey_portal.htm" target="_blank">我是商家</a>
                            </div>

                        </div>

                        <div class="cyx-m-nav-cont cyx-m-nav-cont1 clearfix">
                            <div class="cyx-m-nav-link2 cyx-m-nav-cont1" data-spm="nav-isv-m">
                                <a href="//open.taobao.com/support/createOrEditProblem.htm" target="_blank">我是服务商</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="cyx-m-nav-main">

                    <a href="//www.xinlingshou.cn/zhaopin" class="cyx-m-nav-link1" target="_blank"><i>加入我们</i></a>


                </div>

            </div>
        </div>
    </div>

    <script src="../js/seed-min.js"></script>
    <script>
        window.nav_flase = false;
        var radio_nav_times = setInterval(function () {
            if (window.nav_flase) {
                clearInterval(radio_nav_times);
            } else {
                radio_nav();
            }
        },500);

        function radio_nav() {
            KISSY.use("event,node,dom,kg/slide/2.0.2/", function(S,Event,Node,Dom,Slide) {
                var $ = S.all;
//            顶部导航点击事件
                window.nav_flase = true;
                var wind_w = $(window).width();
                var wind_h = $(window).height();
                /*
                 if(wind_w<750){
                 $('.jygai').item(0).attr('href','javascript:void(0);')
                 }
                 */
                // $('.cyx-m-nav').css('height', parseInt(wind_h) + 'px');
                $('.cyx-m-show').on('click',function () {
                    var _this = $(this);
                    var _isToggle = _this.hasClass('cyx-m-hide');
                    if(_isToggle){
                        _this.removeClass('cyx-m-hide');
                        $('.cyx-m-nav-box').css({
                            'height':'0'
                        });
                        $('.cyx-m-nav').css({
                            'z-index':'10'
                        });
                        setTimeout(function(){
                            $('.cyx-m-nav').css('height', 'auto');
                        },500);

                    }else{
                        _this.addClass('cyx-m-hide');
                        $('.cyx-m-nav-box').css('height', parseInt(wind_h) + 'px');
                        $('.cyx-m-nav').css({
                            'z-index':'9999'
                        });
                        $('.cyx-m-nav').css('height', parseInt(wind_h) + 'px');
                    }
                });
                $('.cyx-m-nav-link2').on('click', function () {
                    $('.cyx-m-show').removeClass('cyx-m-hide');
                    $('.cyx-m-nav-box').css({
                        'height':'0'
                    });
                });
                /*
                 $('.cyx-m-nav-link3').on('click', function () {
                 $('.cyx-m-show').removeClass('cyx-m-hide');
                 $('.cyx-m-nav-box').css({
                 'height':'0'
                 });
                 });
                 */
            });
        }




    </script>
    <div class="banner">
        <img class="banner-bg" src="//img.alicdn.com/tfs/TB13CE_RpXXXXcFXXXXXXXXXXXX-1998-469.jpg" />
        <div class="banner-text">
            <img class="banner-pic1 animated zpy_animated reset" data-num="lightSpeedIn" src="//gw.alicdn.com/tfs/TB1wfa1eOqAXuNjy1XdXXaYcVXa-530-63.png" />
            <img class="banner-pic2 animated zpy_animated reset" data-num="lightSpeedIn2" src="//gw.alicdn.com/tfs/TB1OZmAhcLJ8KJjy0FnXXcFDpXa-545-56.png" />
        </div>
        <!-- 顶部导航 -->

    </div>
    <div class="tcvideo">
        <div class="x_close">
            x
        </div>
        <div class="video_main">
            <div class="video_left">
                <div class="video_left_main">
                    <p class="video_title"></p>
                    <video src="" controls="controls" autoplay="autoplay" class="video"></video>
                </div>
            </div>
            <div class="video_right">
                <div class="video_right_main">

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053336409.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1LViSgMvD8KJjy0FlXXagBFXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">绫致集团（中国）CEO Dan Friis -  新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">2:58</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053330140.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1kR_XgTnI8KJjy0FfXXcdoVXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">良品铺子副总裁 莫俊 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">2:38</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053302509.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1Ou9YgL6H8KJjy0FjXXaXepXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">马克华菲电商总经理 左敬东 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">2:09</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053328171.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1SXPXgMDD8KJjy0FdXXcjvXXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">拉夏贝尔副总裁 王文克 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">2:04</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053332243.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1_19YgL6H8KJjy0FjXXaXepXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">强生 中国区总裁 林国梁 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">2:14</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053220760.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1LHYmgILJ8KJjy0FnXXcFDpXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">宝岛眼镜 COO 刘冀中 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">2:59</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053302604.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1NFPXgMDD8KJjy0FdXXcjvXXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">CACHECACHE CEO Romain Millet - 新零售先锋-货品线上线下打通融合</p>
                        <p class="pvl-list-item-time">3:17</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053206665.mp4">
                        <img src="https://img.alicdn.com/tfs/TB19hevgJfJ8KJjy0FeXXXKEXXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">惠氏客户发展总监 袁伊 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">1:37</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053314163.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1_K9YgL6H8KJjy0FjXXaXepXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">家时代联合创始人 - 李超 新零售先锋-智慧分销集合赋能智慧门店</p>
                        <p class="pvl-list-item-time">2:23</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053318371.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1IYYmgILJ8KJjy0FnXXcFDpXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">谜秀 CEO 刘小平-  新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">4:34</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053298995.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1NFiSgMvD8KJjy0FlXXagBFXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">misscandy 智慧快闪店 - 新零售先锋-数据赋能智慧快闪店</p>
                        <p class="pvl-list-item-time">1:23</p>
                        <div class="sjx"></div>
                    </div>

                    <div class="video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053318414.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1JhevgJfJ8KJjy0FeXXXKEXXa-1920-1080.jpg" alt="" class="video_fm_pic">
                        <p class="video_text">欧乐B 智慧门店 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="pvl-list-item-time">1:25</p>
                        <div class="sjx"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="m_tcvideo">
        <div class="m_x_close">
            x
        </div>
        <div class="m_video_main">
            <div class="m_video_left">
                <div class="m_video_left_main">
                    <p class="m_video_title"></p>
                    <video src="" controls="controls" autoplay="autoplay" class="m_video" webkit-playsinline="" playsinline="" x-webkit-airplay=""></video>
                </div>
            </div>
            <div class="m_video_right">
                <div class="m_video_right_main">

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053336409.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1LViSgMvD8KJjy0FlXXagBFXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">绫致集团（中国）CEO Dan Friis -  新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">2:58</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053330140.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1kR_XgTnI8KJjy0FfXXcdoVXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">良品铺子副总裁 莫俊 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">2:38</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053302509.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1Ou9YgL6H8KJjy0FjXXaXepXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">马克华菲电商总经理 左敬东 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">2:09</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053328171.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1SXPXgMDD8KJjy0FdXXcjvXXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">拉夏贝尔副总裁 王文克 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">2:04</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053332243.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1_19YgL6H8KJjy0FjXXaXepXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">强生 中国区总裁 林国梁 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">2:14</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053220760.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1LHYmgILJ8KJjy0FnXXcFDpXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">宝岛眼镜 COO 刘冀中 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">2:59</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053302604.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1NFPXgMDD8KJjy0FdXXcjvXXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">CACHECACHE CEO Romain Millet - 新零售先锋-货品线上线下打通融合</p>
                        <p class="m_pvl-list-item-time">3:17</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053206665.mp4">
                        <img src="https://img.alicdn.com/tfs/TB19hevgJfJ8KJjy0FeXXXKEXXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">惠氏客户发展总监 袁伊 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">1:37</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053314163.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1_K9YgL6H8KJjy0FjXXaXepXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">家时代联合创始人 - 李超 新零售先锋-智慧分销集合赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">2:23</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053318371.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1IYYmgILJ8KJjy0FnXXcFDpXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">谜秀 CEO 刘小平-  新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">4:34</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053298995.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1NFiSgMvD8KJjy0FlXXagBFXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">misscandy 智慧快闪店 - 新零售先锋-数据赋能智慧快闪店</p>
                        <p class="m_pvl-list-item-time">1:23</p>
                        <div class="m_sjx"></div>
                    </div>

                    <div class="m_video_right_list" data-url="http://cloud.video.taobao.com//play/u/263664221/p/1/e/6/t/1/50053318414.mp4">
                        <img src="https://img.alicdn.com/tfs/TB1JhevgJfJ8KJjy0FeXXXKEXXa-1920-1080.jpg" alt="" class="m_video_fm_pic">
                        <p class="m_video_text">欧乐B 智慧门店 - 新零售先锋-数据赋能智慧门店</p>
                        <p class="m_pvl-list-item-time">1:25</p>
                        <div class="m_sjx"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--tab+slider-->
    <div class="tab-wrap" id="floor01">
        <p class="fl01-title">热门案例</p>
        <div class="tab-con" id="tab-con">
            <div class="tab-li">

                <ul class="tab-content tab-content0 clearfix">

                    <li class="tab-pannel">
                        <a href="http://www.cb.com.cn/gdbb/2018_0802/1249940.html" target="_blank">
                            <img class="slider-pic" src="https://img.alicdn.com/tfs/TB1r98RIMmTBuNjy1XbXXaMrVXa-1200-468.jpg" />
                        </a>
                    </li>

                    <li class="tab-pannel">
                        <a href="//alimarket.taobao.com/markets/qnww/case-lancome" target="_blank">
                            <img class="slider-pic" src="//img.alicdn.com/tfs/TB1pFxORFXXXXa0XFXXXXXXXXXX-1200-468.png" />
                        </a>
                    </li>

                    <li class="tab-pannel">
                        <a href="//alimarket.taobao.com/markets/qnww/case-quanmian?wh_ttid=pc" target="_blank">
                            <img class="slider-pic" src="//img.alicdn.com/tfs/TB1x79nRFXXXXbrXXXXXXXXXXXX-1200-468.png" />
                        </a>
                    </li>

                </ul>

            </div>

            <div class="tab-nav">
                <ul data-click="false">

                    <li>0</li>

                    <li>1</li>

                    <li>2</li>

                </ul>
            </div>

        </div>
    </div>

    <!--celeb-->
    <div class="character">

        <div class="char-people show2 animet2 art">
            <img src="//img.alicdn.com/tfs/TB1hPl8QVXXXXbJaXXXXXXXXXXX-1920-888.jpg" width="100%" alt=" ">
        </div>

        <div class="char-people show2 animet2 ">
            <img src="//img.alicdn.com/tfs/TB1L.aUQVXXXXb3XXXXXXXXXXXX-1920-888.jpg" width="100%" alt=" ">
        </div>

    </div>
    <div class="character1" id="floor02">

        <div class="char-people show1 animet2 art1">
            <img src="//gw.alicdn.com/tfs/TB1lAS9RXXXXXbMapXXXXXXXXXX-545-540.jpg" width="100%" alt=" ">
        </div>

        <div class="char-people show1 animet2 ">
            <img src="//gw.alicdn.com/tfs/TB1fcYhRXXXXXcqaXXXXXXXXXXX-545-540.jpg" width="100%" alt=" ">
        </div>

    </div>

    <!--tab+items-->
    <div class="tab-wrap">
        <div class="arrow-right">
            <img src="//img.alicdn.com/tfs/TB1tA9ARpXXXXbEaXXXXXXXXXXX-22-41.png" alt="">
        </div>
        <div class="nav" id="nav02">
            <ul class="nav-content">
                <li class="nav-span" >全部案例</li>

                <li class="nav-span">全渠道</li>

                <li class="nav-span">数据银行</li>

                <li class="nav-span">客户运营平台</li>

                <li class="nav-span">互动营销</li>

            </ul>
        </div>
        <div class="tab-con02" id="tab-con02">
            <div class="tab-con02-pc">

                <div class="tab-li02">
                    <div class="case-list case-list1">
                        <ul class="case-cont cont clearfix ">


                            <li class="fadeInUp-case reset">
                                <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.132840.677782.2.kWxxMd&amp;uri=&#x2F;baj" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1KgXPQVXXXXcEaXXXXXXXXXXX-390-300.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1MupQRFXXXXa8aXXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">全渠道帮助商家线&lt;&#x2F;br&gt;上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.131325.673820.3.rCankq&amp;uri=&#x2F;lppz" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1KyqgQVXXXXbjXFXXXXXXXXXX-390-300.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1CUB2QVXXXXcdXVXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.131325.673820.4.Rqs35V&amp;uri=&#x2F;sm" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1JM1xQVXXXXXtXpXXXXXXXXXX-390-300.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB10ZKJQVXXXXXdXpXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.131325.673820.6.dEdb7S&amp;uri=&#x2F;wow" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1ky09QVXXXXXCXVXXXXXXXXXX-390-300.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1Yb1nQVXXXXbtXFXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                                    </div>
                                </a>
                            </li>



                            <li class="fadeInUp-case reset">
                                <a href="//alimarket.taobao.com/markets/qnww/case-lancome" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1wQKHQVXXXXXuXXXXXXXXXXXX-392-300.png_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1XVVGRpXXXXagXVXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">兰蔻在天猫超级品牌日通过数据银行，投资回报增长74%，点击转化提升37%</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="//alimarket.taobao.com/markets/qnww/case-moumuying" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1oM8OQVXXXXaFaXXXXXXXXXXX-392-300.png_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1HLpYRpXXXXcdXpXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">某知名奶粉品牌使用数据银行人群包，点击转化率平均提升近80%</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="//alimarket.taobao.com/markets/qnww/case-quanmian" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1.pCqQVXXXXaYXpXXXXXXXXXX-392-300.png_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://gw.alicdn.com/tfs/TB17qKmRpXXXXaVXVXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">全棉时代使用数据银行人群进行投放对比自运营人群，收藏加购率提升50%</p>
                                    </div>
                                </a>
                            </li>



                            <li class="fadeInUp-case reset">
                                <a href="JavaScript:void(0)" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://gw.alicdn.com/tfs/TB1weikRpXXXXb1XVXXXXXXXXXX-391-300.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://gw.alicdn.com/tfs/TB1.zetRpXXXXctXFXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">林氏木业 线上线下互相联动 构建品牌会员关系 提升会员转化成交</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="JavaScript:void(0)" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://gw.alicdn.com/tfs/TB1iFSQRpXXXXceXXXXXXXXXXXX-392-300.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1zhJERFXXXXb_aXXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">SK-II 连接品牌与会员 线上线下全打通 提升会员忠诚度</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="JavaScript:void(0)" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://gw.alicdn.com/tfs/TB1rdCARpXXXXauXFXXXXXXXXXX-393-301.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://gw.alicdn.com/tfs/TB17qKmRpXXXXaVXVXXXXXXXXXX-258-90.png" alt="">
                                        <p class="case-text">全棉时代 跨渠道身份识别 多通道精准触达 会员高价值沉淀</p>
                                    </div>
                                </a>
                            </li>



                            <li class="fadeInUp-case reset">
                                <a href="http://i.wshang.com/Post/Default/Index/pid/245086.html" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1sf9MQVXXXXcmXXXXXXXXXXXX-392-300.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1rhh9RFXXXXc0XpXXXXXXXXXX-259-89.png" alt="">
                                        <p class="case-text">通过天猫直播，美妆品牌美宝莲在纽约的新品发布会中，实现了两小时卖出1万支口红的记录</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="http://www.a-site.cn/article/167716.html" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB1K3R0QVXXXXc5XFXXXXXXXXXX-490-375.jpg_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1W1hGRFXXXXcmaXXXXXXXXXXX-258-89.png" alt="">
                                        <p class="case-text">有故事的饼干奥利奥遇上中国不断刷新电商新纪录的购物平台天猫+淘宝，一款可以让消费者定制的奥利奥包装就此诞生</p>
                                    </div>
                                </a>
                            </li>

                            <li class="fadeInUp-case reset">
                                <a href="http://www.imaijia.com/qt/8a042899576ad6dd01584cfe1efc1da6.shtml" target="_blank">
                                    <div class="case-pic">
                                        <img src="https://img.alicdn.com/tfs/TB14TyaQVXXXXaEXpXXXXXXXXXX-710-452.png_q70.jpg" width="100%" height="100%" />
                                    </div>
                                    <div class="case-btm">
                                        <img class="case-logo" src="https://img.alicdn.com/tfs/TB1.78VRFXXXXcRXVXXXXXXXXXX-258-91.png" alt="">
                                        <p class="case-text">2016年10月28日—11月10日之间，天猫双11上线全新AR互动游戏 ，找狂欢猫，赢奖品，将“黑科技”与消费场景结合</p>
                                    </div>
                                </a>
                            </li>



                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!--无线端案例汇总-->
        <div class=cyx-m-case>
            <div class="m-control-box">
                <div class="m-control">
                    <p class="m-control-current"><i>全部案例</i><span></span></p>
                    <ul class="m-control-list" data-state="false">


                        <li data-id="m-cont0">全部案例</li>
                        <li class="m-control-choosed" data-id="m-cont0"><a href="#m-cont0">全渠道</a></li>



                        <li data-id="m-cont1">数据银行</li>



                        <li data-id="m-cont2">客户运营平台</li>



                        <li data-id="m-cont3">互动营销</li>


                    </ul>
                </div>
            </div>

            <div class="m-cont" id="m-cont0">
                <p class="m-cont-title">全渠道</p>
                <ul class="clearfix">

                    <li class="m-item">

                        <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.132840.677782.2.kWxxMd&amp;uri=&#x2F;baj" target="_blank">

                            <div class="m-item-pic">
                                <img src="https://img.alicdn.com/tfs/TB1KgXPQVXXXXcEaXXXXXXXXXXX-390-300.jpg" width="100%" height="100%" />
                            </div>
                            <div class="m-item-cont">
                                <div class="m-item-logo">

                                    <img src="https://img.alicdn.com/tfs/TB1J9aoRFXXXXbDXXXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                                </div>
                                <p class="m-item-desc">全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                            </div>

                        </a>

                    </li>

                    <li class="m-item">

                        <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.131325.673820.3.rCankq&amp;uri=&#x2F;lppz" target="_blank">

                            <div class="m-item-pic">
                                <img src="https://img.alicdn.com/tfs/TB1KyqgQVXXXXbjXFXXXXXXXXXX-390-300.jpg" width="100%" height="100%" />
                            </div>
                            <div class="m-item-cont">
                                <div class="m-item-logo">

                                    <img src="https://img.alicdn.com/tfs/TB1CUB2QVXXXXcdXVXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                                </div>
                                <p class="m-item-desc">全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                            </div>

                        </a>

                    </li>

                    <li class="m-item">

                        <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.131325.673820.4.Rqs35V&amp;uri=&#x2F;sm" target="_blank">

                            <div class="m-item-pic">
                                <img src="https://img.alicdn.com/tfs/TB1JM1xQVXXXXXtXpXXXXXXXXXX-390-300.jpg" width="100%" height="100%" />
                            </div>
                            <div class="m-item-cont">
                                <div class="m-item-logo">

                                    <img src="https://img.alicdn.com/tfs/TB10ZKJQVXXXXXdXpXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                                </div>
                                <p class="m-item-desc">全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                            </div>

                        </a>

                    </li>

                    <li class="m-item">

                        <a href="https:&#x2F;&#x2F;omnichannel.taobao.com&#x2F;qqd&#x2F;index.htm?spm=312.131325.673820.6.dEdb7S&amp;uri=&#x2F;wow" target="_blank">

                            <div class="m-item-pic">
                                <img src="https://img.alicdn.com/tfs/TB1ky09QVXXXXXCXVXXXXXXXXXX-390-300.jpg" width="100%" height="100%" />
                            </div>
                            <div class="m-item-cont">
                                <div class="m-item-logo">

                                    <img src="https://img.alicdn.com/tfs/TB1Yb1nQVXXXXbtXFXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                                </div>
                                <p class="m-item-desc">全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。</p>
                            </div>

                        </a>

                    </li>

                </ul>
            </div>

            <div class="m-cont" id="m-cont1">
                <p class="m-cont-title">数据银行</p>
                <ul class="clearfix">

                    <li class="m-item">

                        <a href="https://alimarket.taobao.com/markets/qnww/case-lancome" target="_blank">

                            <div class="m-item-pic">
                                <img src="https://img.alicdn.com/tfs/TB1wQKHQVXXXXXuXXXXXXXXXXXX-392-300.png" width="100%" height="100%" />
                            </div>
                            <div class="m-item-cont">
                                <div class="m-item-logo">

                                    <img src="https://img.alicdn.com/tfs/TB1XVVGRpXXXXagXVXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                                </div>
                                <p class="m-item-desc">兰蔻在天猫超级品牌日通过数据银行，投资回报增长74%，点击转化提升37%</p>
                            </div>

                        </a>

                    </li>

                    <li class="m-item">

                        <a href="https://alimarket.taobao.com/markets/qnww/case-moumuying" target="_blank">

                            <div class="m-item-pic">
                                <img src="https://img.alicdn.com/tfs/TB1oM8OQVXXXXaFaXXXXXXXXXXX-392-300.png" width="100%" height="100%" />
                            </div>
                            <div class="m-item-cont">
                                <div class="m-item-logo">

                                    <img src="https://img.alicdn.com/tfs/TB1HLpYRpXXXXcdXpXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                                </div>
                                <p class="m-item-desc">某知名奶粉品牌使用数据银行人群包，点击转化率平均提升近80%</p>
                            </div>

                        </a>

                    </li>

                    <li class="m-item">

                        <a href="https://alimarket.taobao.com/markets/qnww/case-quanmian" target="_blank">

                            <div class="m-item-pic">
                                <img src="https://img.alicdn.com/tfs/TB1.pCqQVXXXXaYXpXXXXXXXXXX-392-300.png" width="100%" height="100%" />
                            </div>
                            <div class="m-item-cont">
                                <div class="m-item-logo">

                                    <img src="https://gw.alicdn.com/tfs/TB17qKmRpXXXXaVXVXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                                </div>
                                <p class="m-item-desc">全棉时代使用数据银行人群进行投放对比自运营人群，收藏加购率提升50%</p>
                            </div>

                        </a>

                    </li>

                </ul>
            </div>

            <div class="m-cont" id="m-cont2">
                <p class="m-cont-title">客户运营平台</p>
                <ul class="clearfix">

                    <li class="m-item">

                        <div class="m-item-pic">
                            <img src="https://gw.alicdn.com/tfs/TB1weikRpXXXXb1XVXXXXXXXXXX-391-300.jpg" width="100%" height="100%" />
                        </div>
                        <div class="m-item-cont">
                            <div class="m-item-logo">

                                <img src="https://gw.alicdn.com/tfs/TB1.zetRpXXXXctXFXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                            </div>
                            <p class="m-item-desc">林氏木业 线上线下互相联动 构建品牌会员关系 提升会员转化成交</p>
                        </div>

                    </li>

                    <li class="m-item">

                        <div class="m-item-pic">
                            <img src="https://gw.alicdn.com/tfs/TB1iFSQRpXXXXceXXXXXXXXXXXX-392-300.jpg" width="100%" height="100%" />
                        </div>
                        <div class="m-item-cont">
                            <div class="m-item-logo">

                                <img src="https://img.alicdn.com/tfs/TB1zhJERFXXXXb_aXXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                            </div>
                            <p class="m-item-desc">SK-II 连接品牌与会员 线上线下全打通 提升会员忠诚度</p>
                        </div>

                    </li>

                    <li class="m-item">

                        <div class="m-item-pic">
                            <img src="https://gw.alicdn.com/tfs/TB1rdCARpXXXXauXFXXXXXXXXXX-393-301.jpg" width="100%" height="100%" />
                        </div>
                        <div class="m-item-cont">
                            <div class="m-item-logo">

                                <img src="https://gw.alicdn.com/tfs/TB17qKmRpXXXXaVXVXXXXXXXXXX-258-90.png" width="100%" height="100%" />

                            </div>
                            <p class="m-item-desc">全棉时代 跨渠道身份识别 多通道精准触达 会员高价值沉淀</p>
                        </div>

                    </li>

                </ul>
            </div>

            <div class="m-cont" id="m-cont3">
                <p class="m-cont-title">互动营销</p>
                <ul class="clearfix">

                    <li class="m-item">

                        <div class="m-item-pic">
                            <img src="https://img.alicdn.com/tfs/TB1sf9MQVXXXXcmXXXXXXXXXXXX-392-300.jpg" width="100%" height="100%" />
                        </div>
                        <div class="m-item-cont">
                            <div class="m-item-logo">

                                <p>天猫直播</p>

                            </div>
                            <p class="m-item-desc">通过天猫直播，美妆品牌美宝莲在纽约的新品发布会中，实现了两小时卖出1万支口红的记录</p>
                        </div>

                    </li>

                    <li class="m-item">

                        <div class="m-item-pic">
                            <img src="https://img.alicdn.com/tfs/TB1K3R0QVXXXXc5XFXXXXXXXXXX-490-375.jpg" width="100%" height="100%" />
                        </div>
                        <div class="m-item-cont">
                            <div class="m-item-logo">

                                <p>奥利奥</p>

                            </div>
                            <p class="m-item-desc">有故事的饼干奥利奥遇上中国不断刷新电商新纪录的购物平台天猫+淘宝，一款可以让消费者定制的奥利奥包装就此诞生</p>
                        </div>

                    </li>

                    <li class="m-item">

                        <div class="m-item-pic">
                            <img src="https://img.alicdn.com/tfs/TB14TyaQVXXXXaEXpXXXXXXXXXX-710-452.png" width="100%" height="100%" />
                        </div>
                        <div class="m-item-cont">
                            <div class="m-item-logo">

                                <p>捉猫猫</p>

                            </div>
                            <p class="m-item-desc">2016年10月28日—11月10日之间，天猫双11上线全新AR互动游戏 ，找狂欢猫，赢奖品，将“黑科技”与消费场景结合</p>
                        </div>

                    </li>

                </ul>
            </div>

        </div>
    </div>
    <style type="text/css">
        /*底部*/
        body,div,p,img,span,a,ul,li,dl,dt,dd{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        ul,li,dl,dt,dd{
            list-style: none;
        }
        /*body{font-family:"SourceHanSansCN", "PingFang","Helvetica Neue", Helvetica, STHeiTi, "Microsoft YaHei", Arial, sans-serif;} */
        body{font-family: "Helvetica Neue","Microsoft Yahei",Helvetica,Arial,"Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;}
        img{
            /*display: block;*/
            /*vertical-align: top;*/
        }
        a{
            color: #000;
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        .bottom-about{
            width: 100%;
            background-color: #0b2041;
            text-align: center;
            overflow: hidden;
        }
        .bottom-about .bottom-center{
            width: 1200px;
            margin: 0 auto;
        }
        .bottom-about .bottom-contert{
            display: inline-block;
            vertical-align: middle;
            font-size: 0;
            margin-top: 80px;
            text-align: center;
            display: none;
        }
        .bottom-about .contert-li{
            display: inline-block;
            vertical-align: middle;
            padding-right: 32px;
            font-size: 18px;
            line-height: 18px;
            margin-right: 32px;
            border-right: 2px solid #fff;
        }
        .bottom-about .contert-li:last-child{
            margin-right: 0;
            padding-right: 0;
            border-right: none;
        }
        .bottom-about .contert-li a{
            color: #fff;
        }
        .bottom-about .bottom-partner{
            display: block;
            width: 100%;
            margin: 56px auto 36px;
            font-size: 0;
            text-align: center;
            overflow: hidden;
        }
        .bottom-partner a{
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            font-size: 13px;
            line-height: 16px;
            margin-right: 10px;
            margin-bottom: 10px;
            color: #d8def4;
            overflow: hidden;
        }
        .bottom-about .bottom-mail{
            display: block;
            margin: 0 auto 50px;
            font-size: 13px;
            color: #fff;
            line-height: 18px;
            overflow: hidden;
        }
        @media screen and (max-width: 1200px){
            .bottom-about .bottom-center{
                width: 96%;
            }
        }
        @media screen and (max-width:800px){
            .bottom-about .bottom-partner{
                margin: 9% auto 7%;
            }
            .bottom-about .bottom-mail{
                margin: 0 auto 9%;
            }
        }
        @media screen and (max-width: 550px){
            .bottom-about .bottom-partner{
                margin: 12% auto 10%;
            }
            .bottom-about .bottom-mail{
                margin: 0 auto 12%;
            }
            .bottom-about .bottom-contert{
                margin-top: 40px;
            }
            .bottom-about .contert-li{
                padding-right: 5px;
                margin-right: 5px;
            }
            .bottom-about .contert-li{
                font-size: 17px;
            }
            .bottom-partner a{
                float: none;
                display: inline-block;
            }
        }
    </style>
    <div class="bottom-about">
        <!-- 底部开始 -->
        <?php echo $this->render('/common/_footer'); ?>
        <!-- 底部结束 -->
    </div>
    <style>
        .back-to-top{
            position: fixed;
            width: 50px;
            height: 50px;
            background: url("//gw.alicdn.com/tfs/TB1Ar1VQVXXXXbBXpXXXXXXXXXX-200-201.png") no-repeat center top;
            background-size: 100% auto;
            right: 50px;
            bottom: 50px;
            z-index: 99999;
            display: none;
        }

        @media screen and (max-width: 750px){
            .back-to-top{
                width: 40px;
                height: 40px;
                right: 20px;
                bottom: 30px;
            }
        }
    </style>
    <a href="javascript:void (0)" class="back-to-top"></a>
    <script src="../js/seed-min.js"></script>
    <script>
        window._backToTop = false;

        var backToTopTimer = setInterval(function () {
            if (window._backToTop) {
                clearInterval(backToTopTimer);
            } else {
                backToTop();
            }
        },1000);

        function backToTop() {
            KISSY.use("event,node,dom", function (S, Event, Node, Dom) {
                window._backToTop = true;

                S.all(window).on('scroll', function () {
                    if (S.all(window).scrollTop() > S.all('body').height()*0.5) {
                        S.all('.back-to-top').show();
                    } else {
                        S.all('.back-to-top').hide();
                    }
                });

                S.all('.back-to-top').on('click', function() {
                    S.all('html,body').animate({scrollTop: 0},0.5);
                })
            })
        }
    </script>
</div>
</html>

<script src="../js/seed-min.js"></script>
<script>
    (function($){
        function mggScrollImg(box,config){
            this.box = $(box);
            this.config = $.extend({},config||{});
            this.width = this.config.width||this.box.children().eq(0).width();//一次滚动的宽度
            this.size = this.config.size||this.box.children().length;
            this.loop = this.config.loop||true;//默认能循环滚动
            this.auto = this.config.auto||true;//默认自动滚动
            this.auto_wait_time = this.config.auto_wait_time||3000;//轮播间隔
            this.scroll_time = 300;//滚动时长
            this.minleft = -this.width*(this.size-1);//最小left值，注意是负数[不循环情况下的值]
            this.maxleft =0;//最大lfet值[不循环情况下的值]
            this.now_left = 0;//初始位置信息[不循环情况下的值]
            this.point_x = null;//记录一个x坐标
            this.point_y = null;//记录一个y坐标
            this.move_left = false;//记录向哪边滑动
            this.index = 0;
            this.busy = false;
            this.timer;
            this.init();
        }
        $.extend(mggScrollImg.prototype,{
            init : function(){
                this.bind_event();
                this.init_loop();
                this.auto_scroll();
            },
            bind_event : function(){
                var self = this;
                self.box.on('touchstart',function(e){
                    if(e.originalEvent.changedTouches.length==1 && !self.busy){
                        self.point_x = e.originalEvent.changedTouches[0].screenX;
                        self.point_y = e.originalEvent.changedTouches[0].screenY;
                    }
                }).on('touchmove',function(e){
                    if(e.originalEvent.changedTouches.length==1 && !self.busy){
                        return self.move(e.originalEvent.changedTouches[0].screenX,e.originalEvent.changedTouches[0].screenY);//这里根据返回值觉得是否阻止默认touch事件
                    }
                }).on('touchend',function(e){
                    !self.busy && self.move_end();
                });
            },
            /*
             初始化循环滚动,当一次性需要滚动多个子元素时，暂不支持循环滚动效果,
             如果想实现一次性滚动多个子元素效果，可以通过页面结构实现
             循环滚动思路：复制首尾节点到尾首
             */
            init_loop : function(){
                if(this.box.children().length == this.size && this.loop){//暂时只支持size和子节点数相等情况的循环
                    this.now_left = -this.width;//设置初始位置信息
                    this.minleft = -this.width*this.size;//最小left值
                    this.maxleft = -this.width;
                    this.box.prepend(this.box.children().eq(this.size-1).clone()).append(this.box.children().eq(1).clone()).css(this.get_style(2));
                    this.box.css('width',this.width*(this.size+2));
                }else{
                    this.loop = false;
                    this.box.css('width',this.width*this.size);
                }
            },
            auto_scroll : function(){//自动滚动
                var self = this;
                if(!self.loop || !self.auto)return;
                clearTimeout(self.timer);
                self.timer = setTimeout(function(){
                    self.go_index(self.index+1);
                },self.auto_wait_time);
            },
            go_index : function(ind){//滚动到指定索引页面
                var self = this;
                if(self.busy)return;
                clearTimeout(self.timer);
                self.busy = true;
                if(self.loop){//如果循环
                    ind = ind<0?-1:ind;
                    ind = ind>self.size?self.size:ind;
                }else{
                    ind = ind<0?0:ind;
                    ind = ind>=self.size?(self.size-1):ind;
                }
                if(!self.loop && (self.now_left == -(self.width*ind))){
                    self.complete(ind);
                }else if(self.loop && (self.now_left == -self.width*(ind+1))){
                    self.complete(ind);
                }else{
                    if(ind == -1 || ind == self.size){//循环滚动边界
                        self.index = ind==-1?(self.size-1):0;
                        self.now_left = ind==-1?0:-self.width*(self.size+1);
                    }else{
                        self.index = ind;
                        self.now_left = -(self.width*(self.index+(self.loop?1:0)));
                    }
                    self.box.css(this.get_style(1));
                    setTimeout(function(){
                        self.complete(ind);
                    },self.scroll_time);
                }
            },
            complete : function(ind){//动画完成回调
                var self = this;
                self.busy = false;
                self.config.callback && self.config.callback(self.index);
                if(ind==-1){
                    self.now_left = self.minleft;
                }else if(ind==self.size){
                    self.now_left = self.maxleft;
                }
                self.box.css(this.get_style(2));
                self.auto_scroll();
            },
            next : function(){//下一页滚动
                if(!this.busy){
                    this.go_index(this.index+1);
                }
            },
            prev : function(){//上一页滚动
                if(!this.busy){
                    this.go_index(this.index-1);
                }
            },
            move : function(point_x,point_y){//滑动屏幕处理函数
                var changeX = point_x - (this.point_x===null?point_x:this.point_x),
                    changeY = point_y - (this.point_y===null?point_y:this.point_y),
                    marginleft = this.now_left, return_value = false,
                    sin =changeY/Math.sqrt(changeX*changeX+changeY*changeY);
                this.now_left = marginleft+changeX;
                this.move_left = changeX<0;
                if(sin>Math.sin(Math.PI/3) || sin<-Math.sin(Math.PI/3)){//滑动屏幕角度范围：PI/3  -- 2PI/3
                    return_value = true;//不阻止默认行为
                }
                this.point_x = point_x;
                this.point_y = point_y;
                this.box.css(this.get_style(2));
                return return_value;
            },
            move_end : function(){
                var changeX = this.now_left%this.width,ind;
                if(this.now_left<this.minleft){//手指向左滑动
                    ind = this.index +1;
                }else if(this.now_left>this.maxleft){//手指向右滑动
                    ind = this.index-1;
                }else if(changeX!=0){
                    if(this.move_left){//手指向左滑动
                        ind = this.index+1;
                    }else{//手指向右滑动
                        ind = this.index-1;
                    }
                }else{
                    ind = this.index;
                }
                this.point_x = this.point_y = null;
                this.go_index(ind);
            },
            /*
             获取动画样式，要兼容更多浏览器，可以扩展该方法
             @int fig : 1 动画 2  没动画
             */
            get_style : function(fig){
                var x = this.now_left ,
                    time = fig==1?this.scroll_time:0;
                return {
                    '-webkit-transition':'-webkit-transform '+time+'ms',
                    '-webkit-transform':'translate3d('+x+'px,0,0)',
                    '-webkit-backface-visibility': 'hidden',
                    'transition':'transform '+time+'ms',
                    'transform':'translate3d('+x+'px,0,0)'
                };
            }
        });
        /*
         这里对外提供调用接口，对外提供接口方法
         next ：下一页
         prev ：上一页
         go ：滚动到指定页
         */
        $.mggScrollImg = function(box,config){
            var scrollImg = new mggScrollImg(box,config);
            return {//对外提供接口
                next : function(){scrollImg.next();},
                prev : function(){scrollImg.prev();},
                go : function(ind){scrollImg.go_index(parseInt(ind)||0);}
            }
        }
    })($)
</script>
<script>
    window.onload = function(){
        var wind_w = $(window).width();
        var leng01 = $('#nav li').length;
        var slideTop = [];
        var outIndex = 0;
        var slideTop = $.mggScrollImg('.tab-content0',{
            callback : function(ind){
                $('.tab-nav').eq(0).find('li').removeClass('active');
                $('.tab-nav').eq(0).find('li').eq(ind).addClass('active');
            }
        });
        $('.tab-nav li').eq(0).addClass('active');

        $('.tab-nav li').on('click', function () {
            $('.tab-nav ul').attr('data-click', 'true');
            var index = $('.tab-nav li').index(this);
            slideTop.go(index);
        });

        $('.tab-li').eq(0).addClass('show');
        $('.nav-title').on('click',function() {
            //var i = $(this).index();//下标第一种写法
            var i = $('.nav-title').index($(this));//下标第二种写法

            // outIndex = i;
            $(this).addClass('select').siblings().removeClass('select');
            $('.tab-li').eq(i).addClass('show').siblings().removeClass('show');
            var slideTop = $.mggScrollImg('.tab-content'+i,{
                callback : function(ind){
                    $('.tab-nav').eq(i).find('li').removeClass('active');
                    $('.tab-nav').eq(i).find('li').eq(ind).addClass('active');
                }
            });
            $('.tab-li').eq(i).find('.tab-nav li').eq(0).addClass('active');
        });

        var leng02 = $('#nav02 li').length;
        var slideTop02 = [];
        for( var j = 0 ; j <leng02 ; j++){
            slideTop02[j] = $.mggScrollImg('.tab-content_J'+j,{
                callback : function(ind){
                    /*$('.page ul li').eq(ind).addClass('active').siblings().removeClass('active');*/
                }
            });
        }
        $('.left').on('click', function() {
            var index = $('.left').index($(this));
            slideTop02[index].prev();
        });
        $('.right').on('click', function() {
            var index = $('.right').index($(this));
            slideTop02[index].next();
        });

        $('.tab-con02-m .tab-li02').eq(0).addClass('show');
        $('.tab-con02-pc .tab-li02').eq(0).addClass('show');
        $('.nav-span').on('click',function() {
            //var j = $(this).index();//下标第一种写法
            var j = $('.nav-span').index($(this));//下标第二种写法
            $(this).addClass('select').siblings().removeClass('select');
            if (wind_w <= 750) {
                $('.tab-con02-m .tab-li02').eq(j).addClass('show').siblings().removeClass('show');
            } else {
                $('.tab-con02-pc .tab-li02').eq(j).addClass('show').siblings().removeClass('show');
            }

        });



        //人物js
        function show(classNames, styleName) {
            var index = 1;
            setInterval(function () {
                var leng1 = $('.' + classNames).length;
                if (index < leng1) {
                    $('.' + classNames).removeClass(styleName);
                    $('.' + classNames).eq(index).addClass(styleName);
                    index++;
                } else {
                    $('.' + classNames).removeClass(styleName);
                    $('.' + classNames).eq(0).addClass(styleName);
                    index = 1;
                }
            }, 4000);
        }
        if (wind_w <= 750) {
            show('show1', 'art1');
        } else {
            show('show2', 'art');
        }

    };

</script>
<script type="text/javascript">
    KISSY.use("event,node,dom,kg/slide/2.0.2/", function (S, Event, Node, Dom, Slide) {
        var $ = S.all;
        //750
        var bxhigh = $(window).height();
        var width = $(window).width();
        //动画控制
        function animate(className, resetClassName) {
            var init_w = $(window).width();
            var init_height = $(window).height();
            var init_scrollTop = $(window).scrollTop();
            var visible = parseInt(init_height) + parseInt(init_scrollTop);
            if (init_w > 750) {
                $('.' + className).each(function (item, i) {
                    var item_scrollTop = $(item).offset().top;
                    var item_height = parseInt($(item).height()) - 10;
                    if (item_height >= init_height*0.75) {
                        item_height = item_height*0.5
                    }
                    var visi_height = parseInt(item_scrollTop) + parseInt(item_height);

                    if (visi_height <= (init_height + init_scrollTop) && visi_height > init_scrollTop) {
                        var data_num = $(item).attr('data-num');
                        if (!$(item).hasClass(data_num)) {
                            $(item).addClass(data_num);
                        }
                    }
                });

                if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE9.0") {
                    $('.' + resetClassName).each(function (item, i) {
                        $(item).css({
                            'opacity': '1',
                            'filter': 'alpha(opacity=100)'
                        });
                    });
                };

                $(window).on('scroll', function () {
                    var scroll_height = $(window).height();
                    var scroll_scrollTop = parseInt($(window).scrollTop());
                    var scroll_visible = parseInt(scroll_height) + parseInt(scroll_scrollTop);
                    $('.' + className).each(function (item, i) {
                        var item_scroll = parseInt($(item).offset().top);
                        var item_h = parseInt($(item).height()) - 10;
                        if (item_h >= scroll_height * 0.75) {
                            item_h = item_h * 0.3
                        } else {
                            item_h = item_h * 0.6
                        }
                        var visi_h = parseInt(item_scroll) + parseInt(item_h);
                        if (scroll_scrollTop <= item_scroll && scroll_visible >= parseInt(visi_h) ) {
                            var data_num = $(item).attr('data-num');
                            if (!$(item).hasClass(data_num)) {
                                $(item).addClass(data_num);
                            }
                        }
                    });
                });
            } else {
                $('.' + resetClassName).each(function (item, i) {
                    $(item).css({
                        'opacity': '1',
                        'filter': 'alpha(opacity=100)'
                    });
                });
            }
        }
        animate('zpy_animated','reset');



        $('.navbar-toggle').on('click', function() {
            if ($(this).hasClass('collapse')) {
                $(this).removeClass('collapse');
                $('.navbar-collapse').hide();
            } else {
                $(this).addClass('collapse');
                $('.navbar-collapse').show();
            }
        });
        // 节流砸
        function throttle(fn, interval, context, accurate) {
            var lastTime, timeout;
            if (accurate) {
                return function () {
                    clearTimeout(timeout);
                    var currentTime = new Date().getTime();
                    var args = arguments;
                    timeout = setTimeout(function () {
                        fn.apply(context || null, Array.prototype.slice.call(args));
                        lastTime = currentTime;
                    }, interval - (currentTime - (lastTime || currentTime - interval)));
                };
            } else {
                return function () {
                    var currentTime = new Date().getTime();
                    var args = arguments;
                    if (!lastTime || currentTime - lastTime >= interval) {
                        fn.apply(context, Array.prototype.slice.call(args));
                        lastTime = currentTime;
                    }
                };
            }
        }

    })
</script>
<script>
    KISSY.use("event,node,dom", function (S, Event, Node, Dom) {
        var $ = S.all;
        var list = [{"item":[{"pic":"https://img.alicdn.com/tfs/TB1KgXPQVXXXXcEaXXXXXXXXXXX-390-300.jpg","text":"全渠道帮助商家线</br>上全方位触达，线下多手段吸客，提高成交转化效果。","logo":"https://img.alicdn.com/tfs/TB1MupQRFXXXXa8aXXXXXXXXXXX-258-90.png","url":"https://omnichannel.taobao.com/qqd/index.htm?spm=312.132840.677782.2.kWxxMd&uri=/baj"},{"pic":"https://img.alicdn.com/tfs/TB1KyqgQVXXXXbjXFXXXXXXXXXX-390-300.jpg","text":"全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。","logo":"https://img.alicdn.com/tfs/TB1CUB2QVXXXXcdXVXXXXXXXXXX-258-90.png","url":"https://omnichannel.taobao.com/qqd/index.htm?spm=312.131325.673820.3.rCankq&uri=/lppz"},{"pic":"https://img.alicdn.com/tfs/TB1JM1xQVXXXXXtXpXXXXXXXXXX-390-300.jpg","text":"全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。","logo":"https://img.alicdn.com/tfs/TB10ZKJQVXXXXXdXpXXXXXXXXXX-258-90.png","url":"https://omnichannel.taobao.com/qqd/index.htm?spm=312.131325.673820.4.Rqs35V&uri=/sm"},{"pic":"https://img.alicdn.com/tfs/TB1ky09QVXXXXXCXVXXXXXXXXXX-390-300.jpg","text":"全渠道帮助商家线上全方位触达，线下多手段吸客，提高成交转化效果。","logo":"https://img.alicdn.com/tfs/TB1Yb1nQVXXXXbtXFXXXXXXXXXX-258-90.png","url":"https://omnichannel.taobao.com/qqd/index.htm?spm=312.131325.673820.6.dEdb7S&uri=/wow"}]},{"item":[{"pic":"https://img.alicdn.com/tfs/TB1wQKHQVXXXXXuXXXXXXXXXXXX-392-300.png","text":"兰蔻在天猫超级品牌日通过数据银行，投资回报增长74%，点击转化提升37%","logo":"https://img.alicdn.com/tfs/TB1XVVGRpXXXXagXVXXXXXXXXXX-258-90.png","url":"//alimarket.taobao.com/markets/qnww/case-lancome"},{"pic":"https://img.alicdn.com/tfs/TB1oM8OQVXXXXaFaXXXXXXXXXXX-392-300.png","text":"某知名奶粉品牌使用数据银行人群包，点击转化率平均提升近80%","logo":"https://img.alicdn.com/tfs/TB1HLpYRpXXXXcdXpXXXXXXXXXX-258-90.png","url":"//alimarket.taobao.com/markets/qnww/case-moumuying"},{"pic":"https://img.alicdn.com/tfs/TB1.pCqQVXXXXaYXpXXXXXXXXXX-392-300.png","text":"全棉时代使用数据银行人群进行投放对比自运营人群，收藏加购率提升50%","logo":"https://gw.alicdn.com/tfs/TB17qKmRpXXXXaVXVXXXXXXXXXX-258-90.png","url":"//alimarket.taobao.com/markets/qnww/case-quanmian"}]},{"item":[{"pic":"https://gw.alicdn.com/tfs/TB1weikRpXXXXb1XVXXXXXXXXXX-391-300.jpg","text":"林氏木业 线上线下互相联动 构建品牌会员关系 提升会员转化成交","logo":"https://gw.alicdn.com/tfs/TB1.zetRpXXXXctXFXXXXXXXXXX-258-90.png","url":"JavaScript:void(0)"},{"pic":"https://gw.alicdn.com/tfs/TB1iFSQRpXXXXceXXXXXXXXXXXX-392-300.jpg","text":"SK-II 连接品牌与会员 线上线下全打通 提升会员忠诚度","logo":"https://img.alicdn.com/tfs/TB1zhJERFXXXXb_aXXXXXXXXXXX-258-90.png","url":"JavaScript:void(0)"},{"pic":"https://gw.alicdn.com/tfs/TB1rdCARpXXXXauXFXXXXXXXXXX-393-301.jpg","text":"全棉时代 跨渠道身份识别 多通道精准触达 会员高价值沉淀","logo":"https://gw.alicdn.com/tfs/TB17qKmRpXXXXaVXVXXXXXXXXXX-258-90.png","url":"JavaScript:void(0)"}]},{"item":[{"pic":"https://img.alicdn.com/tfs/TB1sf9MQVXXXXcmXXXXXXXXXXXX-392-300.jpg","text":"通过天猫直播，美妆品牌美宝莲在纽约的新品发布会中，实现了两小时卖出1万支口红的记录","logo":"https://img.alicdn.com/tfs/TB1rhh9RFXXXXc0XpXXXXXXXXXX-259-89.png","url":"http://i.wshang.com/Post/Default/Index/pid/245086.html"},{"pic":"https://img.alicdn.com/tfs/TB1K3R0QVXXXXc5XFXXXXXXXXXX-490-375.jpg","text":"有故事的饼干奥利奥遇上中国不断刷新电商新纪录的购物平台天猫+淘宝，一款可以让消费者定制的奥利奥包装就此诞生","logo":"https://img.alicdn.com/tfs/TB1W1hGRFXXXXcmaXXXXXXXXXXX-258-89.png","url":"http://www.a-site.cn/article/167716.html"},{"pic":"https://img.alicdn.com/tfs/TB14TyaQVXXXXaEXpXXXXXXXXXX-710-452.png","text":"2016年10月28日—11月10日之间，天猫双11上线全新AR互动游戏 ，找狂欢猫，赢奖品，将“黑科技”与消费场景结合","logo":"https://img.alicdn.com/tfs/TB1.78VRFXXXXcRXVXXXXXXXXXX-258-91.png","url":"http://www.imaijia.com/qt/8a042899576ad6dd01584cfe1efc1da6.shtml"}]}];

        Array.prototype.max = function(){
            return Math.max.apply({},this)
        };
        var data_list = list;
        var copyArr = [];
        var lenArr = [];
        var newData = [];
        var maxLen = 0;
        S.each(data_list, function (n, i) {
            maxLen  = n.item.length > maxLen ? n.item.length : maxLen;
            if(!copyArr[i]){
                copyArr[i] = {}
            }
            copyArr[i]['item'] = n.item.slice(0);
        });
        for (var i = 0; i < maxLen; i++) {
            for (var k = 0, len = copyArr.length; k < len; k++) {
                var item = copyArr[k].item.pop();
                if(item){
                    newData.push(item)
                }
            }
        }

        function tab() {
            $('.nav-span').item(0).addClass('select');
            $(document).delegate('click', '.nav-span', function (e) {
                var target = $(e.target);
                var index = target.index();
                $(target).addClass('select').siblings().removeClass('select');
                _render(index);
            });

        }

        function _render(index) {

            var itemData = [];
            //var itemCls = $('.nav-span');
            //var parentCls = $('.case-cont');
            if(index == 0){
                itemData = newData;
            }else{
                itemData = data_list[index-1]['item'];
            }
            var _li='';
            S.each(itemData, function (n, i) {
                var str =
                    '<li class="fadeInUp-case reset">'+
                    '<a href="'+ n.url +'" target="_blank" class="xh">'+
                    '<div class="case-pic">'+ '<img src="'+n.pic+'" alt="" width="100%" height="100%">'+

                    '</div>'+
                    '<div class="case-btm">'+
                    '<div class="case-logo" data-src="'+ n.logo +'" alt="">'+
                    '</div>'+
                    '<p class="case-text"> '+n.text+'</p>'+
                    '</div>'+
                    '</a>'+
                    '</li>'
                _li=_li+str;
//                $('.cont').append(str);

                //

            })
            $('.cont').html(_li);
            S.each(itemData, function (n, i) {
                var oImg = $('.case-logo').item(i).attr('data-src');
                var pre =  /(\.jpg|\.gif|\.png|\.jpeg+)$/g;
                var istrue = pre.test(oImg);
                if (istrue == false){
                    $('.case-logo').item(i).html('<p class="case-t"> '+ n.logo +'</p>');
                } else {
                    $('.case-logo').item(i).html('<img src="'+ n.logo +'"> '  );
                }
            })
            $('.case-t').css({'font-size':'26px','height':'90px','line-height':'90px','text-align':'center'})

        }
        _render(0);
        tab();
    });
</script>
<script>
    if(window.innerWidth<=750){
        KISSY.use("event,node,dom,kg/slide/2.0.2/", function(S,Event,Node,Dom,Slide) {
            var $ = S.all;

            $('.m-control-current').on('click', function(){
                if($('.m-control-list').attr('data-state')=='false'){
                    $('.m-control-list').show();
                    $('.m-control-list').attr('data-state', 'true');
                    $('.m-control-current span').addClass('show');
                } else {
                    $('.m-control-list').hide();
                    $('.m-control-list').attr('data-state', 'false');
                    $('.m-control-current span').removeClass('show');
                }

            });
            var cyx_case_height = $(".m-control").offset().top;
            var navScrollFun=function(){
                var top = cyx_case_height - $(window).scrollTop();
                if(top <= 0){
                    $('.m-control').addClass('m-control-fixed');
                }else{
                    $('.m-control').removeClass('m-control-fixed');
                }
            };
            navScrollFun();
            $(window).on('scroll', function () {
                navScrollFun();
            });
            $('.m-control-list li').on('click', function(){
                $(this).addClass('m-control-choosed').siblings().removeClass('m-control-choosed');
                var text = $(this).html();
                $('.m-control-current i').html(text);
                $('.m-control-list').hide();
                $('.m-control-list').attr('data-state', 'false');
                $('.m-control-current span').removeClass('show');
                var toNode = $(this).attr("data-id");
                var a = $('#' + toNode).offset().top - $('.m-control-box').height() + "px";

                $('html,body').animate({ scrollTop:a},0.5);
            });
        });

    }
</script>
<script>
    document.documentElement.style.fontSize = document.documentElement.clientWidth / 10 + 'px';





    var width = $(window).width();
    if (width<750){
        $('.tcvideo').hide();
        $('.banner-pic1').on('click', function() {
            $('.m_tcvideo').show();
            var first = $('.m_video_right_list').eq(0).attr('data-url');
            $('.m_video').attr('src', first);
        });
        $('.m_x_close').on('click', function() {
            $('.m_tcvideo').hide();
            $('.m_video').attr('src','');
        });
        var text = $('.m_video_text').eq(0).html();
        $('.m_video_title').html(text);
        $('.m_video_text').eq(0).addClass('m_textshow');
        $('.m_sjx').eq(0).addClass('m_sjxshow');
        $('.m_video_right_list').on('click',function() {
            var index = $('.m_video_right_list').index($(this));
            var _this = $('.m_video_right_list').eq(index).attr('data-url');
            var _text = $('.m_video_text').eq(index).html();
            $('.m_video_title').html(_text);
            $('.m_video').attr('src',_this);
            $(this).find('.m_video_text').addClass('m_textshow').parent().siblings().find('.m_video_text').removeClass('m_textshow');
            $(this).find('.m_sjx').addClass('m_sjxshow').parent().siblings().find('.m_sjx').removeClass('m_sjxshow');
        });
        var lenght = $('.m_video_right_list').length;
        $('.m_video_right_list').eq(lenght-1).css({'margin-right': '0.2rem'});





    }


    if(width>750){
        $('.banner').on('click', function() {

            $('body').addClass('scrolly');
            $('.tcvideo').show();
            var first = $('.video_right_list').eq(0).attr('data-url');
            $('.video').attr('src', first);
        });
        $('.x_close').on('click', function() {
            $('body').removeClass('scrolly');
            $('.tcvideo').hide();
            $('.video').attr('src','');
        });
        var text = $('.video_text').eq(0).html();
        $('.video_title').html(text);
        $('.video_text').eq(0).addClass('textshow');
        $('.sjx').eq(0).addClass('sjxshow');
        $('.video_right_list').on('click',function() {
            var index = $('.video_right_list').index($(this));
            var _this = $('.video_right_list').eq(index).attr('data-url');
            var _text = $('.video_text').eq(index).html();
            $('.video_title').html(_text);
            $('.video').attr('src',_this);
            $(this).find('.video_text').addClass('textshow').parent().siblings().find('.video_text').removeClass('textshow');
            $(this).find('.sjx').addClass('sjxshow').parent().siblings().find('.sjx').removeClass('sjxshow');
        });
        var lenght = $('.video_right_list').length;
        $('.video_right_list').eq(lenght-1).css({'margin-bottom': '30px'});
    }
</script>