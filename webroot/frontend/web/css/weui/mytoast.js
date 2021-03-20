$(function(){
	$.mytoast = function(msg, icon = ""){
		var div = $("<div id=\"toast\"></div>");
		var html = '<div class="weui-mask_transparent"></div><div class="weui-toast">';
		if(icon == "info"){
			html += '<i class="weui-icon-info weui-icon_toast"></i>';
		}else if(icon == 'warning'){
			html += '<i class="weui-icon-warn-no-circle weui-icon_toast"></i>';
		}else if(icon == 'success' || icon == ""){
			html += '<i class="weui-icon-success-no-circle weui-icon_toast"></i>';
		}else if(icon == 'error' || icon == 'forbidden'){
			html += '<i class="weui-icon-warn weui-icon_toast"></i>';
		}
		html += '<p class="weui-toast__content">'+msg+'</p></div>';
		div.html(html);
		$("body").append(div);
		setTimeout(function () {
            div.remove();
        }, 2000);
	}
})