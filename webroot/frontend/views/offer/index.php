<?php

use frontend\components\Html;
use frontend\components\CacheConfig;

$this->title = $title;
?>
<?php echo Html::cssFile("@web/css/zj-mobile-offer.css"); ?>

<div class="page" style="height: 100%;overflow: hidden;">
	<div class="weui-cell zj-mobile__head" style="padding: 16px 16px;" id="head1">
		<div class="weui-cell__hd">
			<span class="zj-mobile__head-search" id="searchBtn">
				<i></i>
			</span>
		</div>
		<div class="weui-cell__bd"></div>
		<div class="weui-cell__ft">
			<a class="zj-mobile__head-edit" href="javascript:void(0);" id="edit">编辑</a>
			<a class="zj-mobile__head-edit hidden" href="javascript:void(0);" id="complete">完成</a>
		</div>
	</div>
	<div class="weui-cell zj-mobile__head zj-mobile__search hidden" style="padding: 16px 16px;" id="head2">
		<div class="weui-cell__hd">
			<i id="closeBtn"></i>
		</div>
		<div class="weui-cell__bd">
		    <input id="searchInput" class="weui-input zj-mobile__search-input" placeholder="请输入搜索内容"/>
		</div>
		<div class="weui-cell__ft">
			<i id="searchStart"></i>
		</div>
	</div>
	<div class="zj-mobile__list" style="height: calc(100% - 51px);overflow: scroll;">
           <ul id="list">
               <li>
                   <div class="zj-mobile__content" id="create">
						<i class="zj-mobile__content-add"></i>
						<div class="zj-mobile__content-word">
							<span>新建清单</span>
							<span>点击即可新建清单</span>
						</div>
                   </div>
               </li>
           </ul>
       </div>
</div>
<script>
$(function(){
	$("#create").on('click', function(){
		window.location.href = "/offer/createProjectNum.html"
	});

	function getData(params){
		$.get("/offer/projectNumList/api", params, function(result){
			var html = '';
			var http = "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>";
			$.each(result.data, function(k, v){
				html += '<li class="zj-mobile__project-num-li">\
	                   <div class="zj-mobile__content">\
							<img src="'+http+v.houseType.img+'" alt="">\
							<div class="zj-mobile__content-div" data-projectNum="'+v.project_num+'">\
								<div class="zj-mobile__content-span">\
									<span class="zj-mobile__content-name">'+v.client_name+'</span>\
									<span class="zj-mobile__content-type">'+v.house_type+' '+v.house_type_name+'</span>\
									<span class="zj-mobile__content-project_num">项目编号：'+v.project_num+'</span>\
								</div>\
							</div>\
	                   </div>\
	                   <span class="zj-mobile__delete-content hidden" data-projectNum="'+v.project_num+'"></span>\
	               </li>';
			});
			$("#list").append(html);
		});
	}
	getData({});

	// 编辑
	$("#edit").on('click', function(){
		$("#complete").show();
		$(this).hide();
		$(".zj-mobile__delete-content").show();
	});

	// 完成
	$("#complete").on('click', function(){
		$("#edit").show();
		$(this).hide();
		$(".zj-mobile__delete-content").hide();
	});

	$("#searchBtn").on('click', function(){
		$("#head2").css("display", "flex");
		$("#head1").hide();
	});

	$("#closeBtn").on('click', function(){
		$("#head1").css("display", "flex");
		$("#head2").hide();
	});

	$("#searchStart").click(function(){
		$("#list li.zj-mobile__project-num-li").each(function(k, v){
			$(v).remove();
		});
		getData({"name":$("#searchInput").val()});
	});

	$("#list").on('click','.zj-mobile__content-div',function(){
		window.location.href = "/offer/updateProjectNum.html?projectNum="+$(this).data("projectnum");
	});

	$("#list").on('click','.zj-mobile__delete-content',function(){
		var _this = $(this);
		var projectNum = $(this).data("projectnum");
		$.confirm("您确定要删除吗?", "确认删除?", function() {
			$.post("/offer/delete/api", {"projectNum":projectNum}, function(result){
				if(result.result){
					$.toast(result.msg);
					_this.parent().remove();
				}else{
					$.toast(result.msg, "forbidden");
				}
			});
        }, function() {
          	//取消操作
        });
	});
})
</script>

