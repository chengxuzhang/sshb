<?php

use frontend\components\Html;
use frontend\components\CacheConfig;

$this->title = $title;
?>
<?php echo Html::cssFile("@web/css/zj-mobile-offer.css"); ?>
<?php echo Html::cssFile("@web/css/weui/weui2.css"); ?>
<?php echo Html::jsFile("@web/css/weui/zepto.weui.js"); ?>
<?php echo Html::jsFile("@web/js/html2canvas.min.js"); ?>
<?php echo Html::jsFile("@web/js/qrcode.min.js"); ?>
<style>
.weui-half-screen-dialog{
	padding: 0 24px;
}
.weui-cell:before{
	border-top: none;
}
.weui-cells_radio label {
    width: 30%;
    float: left;
}
</style>

<div class="page" id="page">
	<div class="weui-cell zj-mobile__head" style="padding: 16px 16px;">
		<div class="weui-cell__hd">
			<a class="zj-mobile__head-share" href="javascript:void(0);" id="shareWeb"></a>
		</div>
		<div class="weui-cell__bd" style="text-align: center;color: #ffffff;">
			<?= $village->title ?>
		</div>
		<div class="weui-cell__ft">
			<a class="zj-mobile__head-print" href="javascript:void(0);" id="printWeb"></a>
		</div>
	</div>

	<div class="weui-cell zj-mobile__form">
		<div class="weui-cell__bd">
			<div class="zj-mobile__project-num">
				项目编号：<?= $project_num; ?>
			</div>
			<div class="weui-media-box weui-media-box_appmsg zj-mobile__village-info">
                <div class="weui-media-box__hd zj-mobile__village-info-img">
                <?= Html::img("@web/images/house.png", ['class'=>'weui-media-box__thumb']); ?>
                </div>
                <div class="weui-media-box__bd">
                    <h4 class="weui-media-box__title zj-mobile__village-info-title"><?= $village->title ?></h4>
                    <p class="weui-media-box__desc zj-mobile__village-info-desc"><?= $village->address ?></p>
                </div>
            </div>
			<div class="zj-mobile__house-type">
				<span>住房信息</span>
				<div class="weui-cell zj-mobile__select-house-type" id="selectHouseType">
					<div class="weui-cell__bd zj-mobile__select-value" id="zj-mobile__select-house-type">
						<?= $offerInfo->house_type . "  " . $offerInfo->house_type_name . "  " . $offerInfo->house_area ?>
					</div>
					<div class="weui-cell__ft">
						<span class="zj-mobile__select-house-type-icon">
							<i class="icon icon-6"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="zj-mobile__house-type">
				<span>风格</span>
				<div class="weui-cell zj-mobile__select-house-type" style="width: 6.5em;" id="selectStyle">
					<div class="weui-cell__bd zj-mobile__select-value" id="selectStyleValue">
						<?= $offerInfo->house_style ?>
					</div>
					<div class="weui-cell__ft">
						<span class="zj-mobile__select-house-type-icon">
							<i class="icon icon-6"></i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="weui-cell zj-mobile__body">
		<div class="zj-mobile__body-content">
			<div class="zj-mobile__content-form-block">
				<span>姓名</span>
				<div class="weui-cell zj-mobile__form-input">
		            <div class="weui-cell__bd">
		                <input id="client_name" name="client_name" class="weui-input" placeholder="填写姓名" value="<?= $offerInfo->client_name; ?>"/>
		            </div>
	          	</div>
			</div>

			<div class="zj-mobile__content-form-block">
				<span>楼栋单元室信息</span>
				<div class="weui-cell zj-mobile__form-input">
		            <div class="weui-cell__bd">
		                <input id="house_address" name="house_address" class="weui-input" placeholder="填写楼栋单元室信息" value="<?= $offerInfo->house_address; ?>" />
		            </div>
	          	</div>
			</div>

			<div class="zj-mobile__content-form-block">
				<span>电话</span>
				<div class="weui-cell zj-mobile__form-input">
		            <div class="weui-cell__bd">
		                <input id="client_phome" id="client_phome" class="weui-input" placeholder="填写电话" value="<?= $offerInfo->client_phome ?>" />
		            </div>
	          	</div>
			</div>

			<div class="zj-mobile__content-form-block">
				<span>性别</span>
				<div class="weui-cell zj-mobile__form-input2">
		            <div class="weui-cell__bd">
				        <div class="weui-cells_radio">
				            <label class="weui-cell">
				                <div class="weui-cell__hd">
				                    <input type="radio" class="weui-check" name="sex" <?= $offerInfo->sex == "男" ? "checked" : ""; ?> value="男" />
				                    <i class="weui-icon-checked"></i>
				                </div>
				                <div class="weui-cell__bd">
				                    <p>男</p>
				                </div>
				            </label>
				            <label class="weui-cell">
				                <div class="weui-cell__hd">
				                    <input type="radio" name="sex" class="weui-check" value="女" <?= $offerInfo->sex == "女" ? "checked" : ""; ?>/>
				                    <i class="weui-icon-checked"></i>
				                </div>
				                <div class="weui-cell__bd">
				                    <p>女</p>
				                </div>
				            </label>
				        </div>
		            </div>
	          	</div>
			</div>
		</div>
	</div>

	<div class="zj-mobile__attribute">
		<div class="weui-cell zj-mobile__attribute-nav">
			<div class="weui-cell__hd">
				<a href="javascript:void(0);">产品名称 <i class="zj-mobile__nav-icon"></i></a>
			</div>
			<div class="weui-cell__bd weui-flex" style="text-align: center;height:25px;line-height: 25px;">
				<a href="javascript:void(0);" class="weui-flex__item">颜色 <i class="zj-mobile__nav-icon"></i></a>
                <a href="javascript:void(0);" class="weui-flex__item">数量(件) <i class="zj-mobile__nav-icon"></i></a>
			</div>
			<div class="weui-cell__ft">
				<span>团购价</span>
			</div>
		</div>
		<div class="zj-mobile__attribute-list">
			<div class="weui-panel weui-panel_access" id="attributeContent"></div>
		</div>
	</div>

	<div class="zj-mobile__price">
		<div class="weui-cell">
			<div class="weui-cell__hd"></div>
			<div class="weui-cell__bd"></div>
			<div class="weui-cell__ft">
				<p class="zj-mobile__price-default" id="priceDefault">团购价总计：￥0</p>
				<p class="zj-mobile__price" id="price">价格￥0</p>
				<p class="zj-mobile__price-s" id="ps">签单后立省￥0</p>
			</div>
		</div>
	</div>

	<div class="zj-mobile__submit">
		<a class="weui-btn zj-mobile__btn-save" href="javascript:" id="save">保存</a>
	</div>
</div>

<script type="text/javascript">
$(function(){
	var submitObj = {};
	submitObj.project_num = "<?= $project_num ?>";
	submitObj.village_name = '<?= $village->title ?>';
	submitObj.village_address = '<?= $village->address ?>';

	submitObj.house_type = "<?= $offerInfo->house_type ?>";
	submitObj.house_type_name = "<?= $offerInfo->house_type_name ?>";
	submitObj.house_area = "<?= $offerInfo->house_area ?>";
	submitObj.house_id = "<?= $offerInfo->house_id ?>";
	submitObj.template_id = "<?= $offerInfo->template_id ?>";

	submitObj.house_style = "<?= $offerInfo->house_style ?>";

	var houseTypeList = []; // 户型列表
    if(houseTypeList.length <= 0){
        $.get("/offer/houseTypes/api",function(result){
            if(result.result && result.data.length > 0){
                $.each(result.data, function(k, v){
                    var obj1 = {
                        "label":v.name,"value":v.id,"children":[], "extend":v
                    }

                    if(v.productTemplate){
                        $.each(v.productTemplate, function(m, n){
                            var obj2 = {
                                "label":n.name,"value":n.id, "extend":n
                            }
                            obj1.children.push(obj2);
                        });
                    }
                    houseTypeList.push(obj1);
                });
            }
        });
    }
	$('#selectHouseType').on('click', function () {
        weui.picker(houseTypeList, {
            onConfirm: function (result) {
                console.log(result);
                $("#zj-mobile__select-house-type").html(result[0].extend.name + "  " + result[0].extend.type + "  " + result[0].extend.area);
                submitObj.house_type = result[0].extend.name;
                submitObj.house_type_name = result[0].extend.type;
                submitObj.house_area = result[0].extend.area;
                submitObj.house_id = result[0].extend.id;
                submitObj.template_id = result[1].extend.id;
                getAttribute(result[1].value);
            },
            id: 'doubleLinePicker'
        });
	});

    var styleList = [];
    $.get("/offer/villageStyle/api", {"vid":<?= $village->id ?>}, function (result) {
        var $house_style = result.data.style;
        $.each($house_style.split(","), function(key, value){
            styleList.push({"label":value, "value":value});
        });
    });
	$("#selectStyle").on('click', function(){
		weui.picker(styleList, {
			onConfirm: function (result) {
					console.log(result);
					submitObj.house_style = result[0].value;
					$("#selectStyleValue").html(result);
			},
		   id: 'stylePicker'
		});
	});

	var $json = JSON.parse('<?= $offerInfo->project_attribute; ?>');
	var $isCheckedProductIds = [];
	var $checkedProductList = [];
	$.each($json, function (k, v) {
        $isCheckedProductIds.push(+v.pid);
        $checkedProductList[+v.pid] = v;
    });

	var attributeList = [];
	function getAttribute(templateId){
		$("#attributeContent").html("");
		$.post("/offer/attributeByTemplateId/api", {"templateId":templateId}, function(result){
			var content = '';
			$.each(result.data, function(k, v){
				content += '<div class="weui-panel__hd zj-mobile__position-name"><i class="zj-mobile__attribute-list-icon"></i>'+v.name+'</div>';
				content += '<div class="weui-panel__bd">';
				$.each(v.children, function(c, n){
					attributeList[n.id] = n.productAttribute;
					var checkFlag = ($.inArray(+n.id, $isCheckedProductIds) !== -1) ? "checked" : "";
					var $params = {
					    "id":n.productAttribute[0].id,
					    "value":n.productAttribute[0].value,
                        "default":n.productAttribute[0].price_default,
                        "price":n.productAttribute[0].price,
                        "amount":n.productAttribute[0].amount
                    };
					if(checkFlag === "checked"){
					    $params.id = $checkedProductList[+n.id].cid;
					    $params.value = $checkedProductList[+n.id].color;
					    $params.default = $checkedProductList[+n.id].default_price;
					    $params.price = $checkedProductList[+n.id].price;
					    $params.amount = $checkedProductList[+n.id].amount;
                    }
					content += '<div href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg zj-mobile__media-box">\
	                    <div class="weui-media-box__hd">\
	                        <div class="weui-cells_checkbox">\
					            <label class="zj-mobile__label-checkbox">\
					                <input type="checkbox" '+checkFlag+' class="weui-check zj-mobile__attribute-checkbox" name="checkbox_'+n.id+'" value="'+n.id+'"/><i class="weui-icon-checked"></i>'+n.name+'\
					            </label>\
					        </div>\
	                    </div>\
	                    <div class="weui-media-box__bd zj-mobile__attribute-color">\
	                    	<div class="zj-mobile__color-area">\
	                        	<a href="javascript:void(0);" style="background-color:'+$params.value+';" class="selectColor" data-id="'+n.id+'" data-cid="'+$params.id+'" data-color="'+$params.value+'"></a>\
	                        	<em></em>\
	                        </div>\
	                        <div class="zj-mobile__amount-area">\
	                        	<a href="javascript:void(0);" class="selectAmount" data-id="'+n.id+'" data-cid="'+n.productAttribute[0].id+'">'+($params.amount ? $params.amount : '1')+'</a>\
	                        	<em></em>\
	                        </div>\
	                    </div>\
	                    <div class="weui-media-box__ft zj-mobile__media-box-price">\
	                        <span class="zj-mobile__attribute-price-default" style="display: none;">'+$params.default+'</span>\
	                        <span class="zj-mobile__attribute-price">'+$params.price+'</span>\
	                    </div>\
	                </div>';
				});
				content += '</div>';
			});
			$("#attributeContent").append(content);

			calcPrice();
		})
	}
	getAttribute(<?= $offerInfo->template_id ?>);

	// 计算价格
	function calcPrice(){   
	    var price_default = 0;
	    var price = 0;
	    $(".zj-mobile__media-box").each(function(a, b){
	    	$(b).removeClass("active");
	    });
	    $('input.zj-mobile__attribute-checkbox:checked').each(function(){
	    	//遍历每一个名字为nodes的复选框，其中选中的执行函数
	    	var box = $(this).parents(".zj-mobile__media-box");
            var amount = parseInt(box.find(".selectAmount").eq(0).html());
	    	price_default += parseInt(box.find(".zj-mobile__attribute-price-default").eq(0).html()) * amount;
	    	price += parseInt(box.find(".zj-mobile__attribute-price").eq(0).html()) * amount;
	    	box.addClass("active");
	    });
	    $("#priceDefault").html("团购价总计：￥" + price);
	    $("#price").html("价格￥" + price_default);
	    $("#ps").html("签单后立省￥" + (price_default - price));
	}

	$(".zj-mobile__attribute-list").on('click','.zj-mobile__label-checkbox',function(){
		calcPrice();
	});

	$(document).on('click','.selectColor', function(){
		var id = $(this).data("id");
		var tempList = [];
		var _this = $(this);
		for (var i = 0; i < attributeList[id].length; i++) {
            var label = '<a style="color:'+attributeList[id][i].value+';">'+attributeList[id][i].name+'</a>';
			tempList.push({"label":label, "value":attributeList[id][i].value, "extend":attributeList[id][i]});
		}
		weui.picker(tempList, {
		   onConfirm: function (result) {
		   		console.log(result);
		   		_this.css("background-color", result[0].value);
		   		_this.attr("data-cid", result[0].extend.id);
		   		_this.parent().parent().next().find("span").eq(0).html(result[0].extend.price_default);
		   		_this.parent().parent().next().find("span").eq(1).html(result[0].extend.price);
		   		calcPrice(); // 计算价格
		   },
		   id: 'selectColorPicker'
		});
	});

    var currentAmount = null;
    $(document).on("click", ".selectAmount", function() {
        currentAmount = $(this);
        var currentAmountCount = parseInt(currentAmount.html());
        $.modal({
            title: "设置数量",
            html: '<div class="weui-count">\
            <a class="weui-count__btn weui-count__decrease"></a>\
            <input class="weui-count__number" type="number" value="'+currentAmountCount+'" />\
            <a class="weui-count__btn weui-count__increase"></a>\
            </div>',
            buttons: [
                { text: "确定", onClick: function(){
                    currentAmount.html($(".weui-count__number").val());
                    calcPrice(); // 计算价格
                } },
                { text: "取消", className: "default", onClick: function(){

                } }
            ]
        });
    });
   
 	$("#save").click(function(){
 		submitObj.client_name = $("#client_name").val();
 		submitObj.house_address = $("#house_address").val();
 		submitObj.client_phome = $("#client_phome").val();
 		submitObj.sex = $("input[name='sex']:checked").val();
 		if(!submitObj.hasOwnProperty("house_id")){
 			$.toast("请选择户型信息", "forbidden");
 			return false;
 		}
 		if(!submitObj.hasOwnProperty("house_style")){
 			// $.toast("请选择风格", "forbidden");
 			$.toast("请选择风格", "forbidden");
 			return false;
 		}

 		if(submitObj.client_name === "" || submitObj.house_address === "" || submitObj.client_phome === ""){
 			$.toast("请填写完整客户信息", "forbidden");
 			return false;
 		}
 		var json = [];
 		$('input.zj-mobile__attribute-checkbox:checked').each(function(j, k){
	    	//遍历每一个名字为nodes的复选框，其中选中的执行函数
            var box = $(this).parents(".zj-mobile__media-box");
            var $input = box.find(".selectColor").eq(0);
            var cid = parseInt($input.data("cid"));
            var color = $input.data("color");
            var pid = $(k).val();
            var default_price = box.find(".zj-mobile__attribute-price-default").eq(0).html();
            var price = box.find(".zj-mobile__attribute-price").eq(0).html();
            var amount = box.find(".selectAmount").eq(0).html();
            json.push({pid, cid, color, default_price, price, amount});
	    });
	    submitObj.project_attribute = JSON.stringify(json);
 		console.log(submitObj);
 		$.post("/offer/updateProjectNum/api", submitObj, function(result){
 			if(result.result){
 				window.location.href = "/offer.html";
 			}else{
 				$.toast(result.msg, "forbidden");
 			}
 		})
 	});

    var isShow = false;
    $("#shareWeb").click(function(){
        $(".loading2").show();
        var projectNum = "<?= $project_num ?>";
        if(isShow){
            $(".loading2").hide();
            $("#shareCanvas").show();
            return false;
        }
        $.get("/offer/createExcelUrl/api", {"projectNum":projectNum}, function (result) {
            $(".loading2").hide();
            if(result.result){
                var qrcode = new QRCode(document.getElementById("qrcode"), {
                    width : $(window).width() / 2,
                    height : $(window).width() / 2
                });
                qrcode.makeCode("<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>/excel/<?= $project_num ?>.xls");

                html2canvas($("#sharePng")[0]).then(canvas => {
                    var url = canvas.toDataURL();//图片地址
                    $("#shareBox").find("img").attr("src", url);
                    $("#shareCanvas").show();
                    isShow = true;
                });
            }else{
                $.toast(result.msg,"forbidden");
            }
        })
    });

    $("#printWeb").click(function () {
        $(".loading2").show();
        var projectNum = "<?= $project_num ?>";
        $.get("/offer/createExcelUrl/api", {"projectNum":projectNum}, function (result) {
            $(".loading2").hide();
            if(result.result){
                window.location.href = "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>/excel/<?= $project_num ?>.xls";
            }else{
                $.toast(result.msg,"forbidden");
            }
        })
    })

    $("#shareBox span").click(function () {
        $("#shareCanvas").hide();
    });

    var MAX = 99, MIN = 1;
    $(document).on('click', '.weui-count__decrease', function (e) {
        var $input = $(e.currentTarget).parent().find('.weui-count__number');
        var number = parseInt($input.val() || "0") - 1
        if (number < MIN) number = MIN;
        $input.val(number)
    })
    $(document).on('click', '.weui-count__increase', function (e) {
        var $input = $(e.currentTarget).parent().find('.weui-count__number');
        var number = parseInt($input.val() || "0") + 1
        if (number > MAX) number = MAX;
        $input.val(number)
    })
})


</script>
<div id="sharePng" style="width: 100vw;height: 177.83vw;">
    <?= Html::img("@web/images/weui/bg.png", array("style"=>"width:100vw;height:110.6vw;")) ?>
    <div id="qrcode" style="width:50vw; height:50vw; margin: 10px auto;"></div>
    <div style="text-align: center;color: #4B4B4B;font-size: 1.2em;">扫二维码可<span style="color: #FFAF22;">保留/分享</span>电子清单</div>
</div>
<div id="shareCanvas" class="zj-mobile__share-canvas hidden">
    <div class="zj-mobile__share-box" id="shareBox">
        <div class="zj-mobile__share-tips">长按图片保存</div>
        <span></span>
        <img src="" alt="">
    </div>
</div>
<div class="loading2 hide" data-text="加载中..."></div>