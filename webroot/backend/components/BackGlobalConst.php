<?php
namespace backend\components;

use common\consts\GlobalConst;

interface BackGlobalConst extends GlobalConst{
	const
		COMMENT_STATUS_ACTIVE = 10, // 审核通过 
		COMMENT_STATUS_DISABLED = 20, // 垃圾评论
		COMMENT_STATUS_NEW = 0, // 新评论
		COMMENT_STATUS_DELETE = 20, // 已经删除
		COMMENT_STATUS_TOP = 90, // 被置顶的
		COMMENT_STATUS_DANGER = 40; // 被举报的

    const
        CONFIG_TYPE_STRING = 1, // 字符串类型
        CONFIG_TYPE_MEIJU = 2, // 多选
        CONFIG_TYPE_SELECT = 3; // 下拉
}
