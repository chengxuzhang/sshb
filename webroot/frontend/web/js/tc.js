//弹出层
$('.vr_play').on('click', function () {
  layer.open({
    type: 2,
    title: '',
    maxmin: false,
    shadeClose: true, //点击遮罩关闭层
    area: ['900px', '550px'],
    content: 'tc_1.html'
  })
});

$('.bim_play').on('click', function () {
  layer.open({
    type: 2,
    title: '',
    maxmin: false,
    shadeClose: true, //点击遮罩关闭层
    area: ['900px', '550px'],
    content: 'tc_2.html'
  })
});


$('.tc_2').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html'
  })
});



$('.tc_1').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809132820.mp4')
    }
  })
});

$('.tc_3').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20171214115104.mp4')
    }
  })
});

$('.tc_4').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20171214115244.mp4')
    }
  })
});

$('.tc_5').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20171013151140.mp4')
    }
  })
});

$('.tc_6').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20171013151220.mp4')
    }
  })
});

$('.tc_7').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/pano_2.1_20171225.mp4')
    }
  })
});

$('.tc_8').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170824155309.mp4')
    }
  })
});

$('.tc_9').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20180109110429.mp4')
    }
  })
});

$('.tc_9').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20180109110429.mp4')
    }
  })
});

$('.tc_10').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809134308.mp4')
    }
  })
});

$('.tc_11').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170925192832.mp4')
    }
  })
});

$('.tc_12').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809134336.mp4')
    }
  })
});


$('.tc_13').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809134451.mp4')
    }
  })
});


$('.tc_14').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170925192536.mp4')
    }
  })
});


$('.tc_15').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809134248.mp4')
    }
  })
});


$('.tc_16').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809134320.mp4')
    }
  })
});

$('.tc_17').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170824155319.mp4')
    }
  })
});

$('.tc_18').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809140123.mp4')
    }
  })
});

$('.tc_19').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20180209151603.mp4')
    }
  })
});

$('.tc_20').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/jcsp_tls_1.mp4')
    }
  })
});

$('.tc_21').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830164937.mp4')
    }
  })
});

$('.tc_22').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170920144132.mp4')
    }
  })
});

$('.tc_23').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170623144147.mp4')
    }
  })
});

$('.tc_24').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/jcsp_yj_2.1.mp4')
    }
  })
});

$('.tc_25').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830172809.mp4')
    }
  })
});

$('.tc_26').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830172619.mp4')
    }
  })
});

$('.tc_27').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830171706.mp4')
    }
  })
});


$('.tc_28').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830172659.mp4')
    }
  })
});


$('.tc_29').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830172829.mp4')
    }
  })
});


$('.tc_30').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830172915.mp4')
    }
  })
});


$('.tc_31').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830172846.mp4')
    }
  })
});

$('.tc_32').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830171247.mp4')
    }
  })
});


$('.tc_33').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830173120.mp4')
    }
  })
});

$('.tc_34').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830172445.mp4')
    }
  })
});

$('.tc_35').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830173020.mp4')
    }
  })
});

$('.tc_36').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20171009103919.mp4')
    }
  })
});

$('.tc_37').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20171009103955.mp4')
    }
  })
});

$('.tc_38').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830175330.mp4')
    }
  })
});

$('.tc_39').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830175453.mp4')
    }
  })
});


$('.tc_40').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170601185654.mp4')
    }
  })
});

$('.tc_41').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830175755.mp4')
    }
  })
});
$('.tc_42').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830175801.mp4')
    }
  })
});
$('.tc_43').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20180112105312.mp4')
    }
  })
});
$('.tc_44').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830181509.mp4')
    }
  })
});
$('.tc_45').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830181036.mp4')
    }
  })
});
$('.tc_46').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830181136.mp4')
    }
  })
});
$('.tc_47').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830182526.mp4')
    }
  })
});
$('.tc_48').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830182708.mp4')
    }
  })
});
$('.tc_49').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830182041.mp4')
    }
  })
});
$('.tc_50').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830182259.mp4')
    }
  })
});
$('.tc_51').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830183444.mp4')
    }
  })
});
$('.tc_52').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830183607.mp4')
    }
  })
});
$('.tc_53').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830183752.mp4')
    }
  })
});
$('.tc_54').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830183808.mp4')
    }
  })
});
$('.tc_55').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830183825.mp4')
    }
  })
});
$('.tc_56').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830184147.mp4')
    }
  })
});
$('.tc_57').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170707155825.mp4')
    }
  })
});
$('.tc_58').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830184429.mp4')
    }
  })
});
$('.tc_59').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830184500.mp4')
    }
  })
});
$('.tc_60').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830184618.mp4')
    }
  })
});
$('.tc_61').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170601185031.mp4')
    }
  })
});
$('.tc_62').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830184752.mp4')
    }
  })
});
$('.tc_63').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170601185122.mp4')
    }
  })
});
$('.tc_64').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170601185236.mp4')
    }
  })
});
$('.tc_65').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830185019.mp4')
    }
  })
});
$('.tc_66').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830185025.mp4')
    }
  })
});
$('.tc_67').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830185029.mp4')
    }
  })
});
$('.tc_68').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830185047.mp4')
    }
  })
});
$('.tc_69').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170830184903.mp4')
    }
  })
});
$('.tc_70').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170616180858.mp4')
    }
  })
});
$('.tc_71').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170623144325.mp4')
    }
  })
});

$('.tc_72').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809132820.mp4')
    }
  })
});
$('.tc_73').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809132650.mp4')
    }
  })
});
$('.tc_74').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809132737.mp4')
    }
  })
});
$('.tc_75').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809132847.mp4')
    }
  })
});
$('.tc_76').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809135222.mp4')
    }
  })
});
$('.tc_77').on('click', function () {
  layer.open({
    type: 2,
    title: '视频讲解',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area: ['1000px', '800px'],
    content: 'zj_tc.html',
    success: function (layero, index) {
      var body = layer.getChildFrame('body', index);
      var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
      body.find('.yy_video').attr('src', 'https://video.dabanjia.com/czsp_20170809135245.mp4')
    }
  })
});