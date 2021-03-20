function checkPhone(obj) {
    var rgs = /^1[3|4|5|7|8]\d{9}$/;
    if (!rgs.test(obj))
        return false;
    else return true;
}
$(function () {
    $(".on_sqty").on("click", function () {
        var name = $("#name").val();
        var phone = $("#phone").val();

        if (name == '' || phone == '') {
            layer.msg("请填写完整资料信息，再提交申请", { time: 1500 });
            return;
        }
        if (!checkPhone(phone)) {
            layer.msg("请输入有效的手机号码", { time: 1500 });
            return;
        }

        var province = $("#Province").val();
        var city = $("#City").val();
        var typename = $("#on_title").text();
        $.ajax({
            url: 'tiyan.html',
            type: 'POST',
            dataType: "json",
            data: {
                name: name,
                phone: phone,
                province: province,
                city: city,
                type: typename
            },
            success:function (data) {
                if(data.status == 200){
                    $("#name").val("");
                    $("#phone").val("");
                    layer.msg(data.msg);
                }else{
                    layer.msg(data.msg);
                }
            }
        });
    });
});
