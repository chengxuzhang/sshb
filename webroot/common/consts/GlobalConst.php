<?php

namespace common\consts;

interface GlobalConst {

    const
        //统一数据状态   10有效,20删除
        COMMON_STATUS_EMPTY = 0,
        COMMON_STATUS_ACTIVE = 10,
        COMMON_STATUS_DELETED = 20;

    const
        HTTP_OSS_DOMAIN = "http://pinle123.oss-cn-beijing.aliyuncs.com/",
        HTTP_OSS_UPLOAD_URL = "http://oss-cn-beijing.aliyuncs.com",
        HTTP_OSS_ACCESSID = "LTAIYaTEUX7WTxUt",
        HTTP_OSS_ACCESSKEY = "L6Z3MgoKbSub0CAyxiHbJRwhW1Pgtx",
        HTTP_OSS_BUCKET = "pinle123",
        HTTP_OSS_DIRNAME = "pinle";

    const
        COUPON_TYPE_NOMK = 1, // 无门槛
        COUPON_TYPE_MJ = 2; // 满减

    const
        ORDER_STATUS_NOPAY = 20, // 待支付
        ORDER_STATUS_PAY = 30, // 已支付 待发货
        ORDER_STATUS_YFH = 40, // 已发货
        ORDER_STATUS_SD = 50, // 派送中
        ORDER_STATUS_SUCCESS = 60, // 成功
        ORDER_STATUS_FIAL = 70, // 失败
        ORDER_STATUS_CANCEL = 90; // 取消
}
