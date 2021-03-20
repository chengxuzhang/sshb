<?php
return [
    'adminEmail' => 'admin@example.com',
    'cacheKey' => [
    	'frontend' => [
    		[
    			'pageName' => '首页缓存',
    			'document' => ['首页文档列表缓存','FrontendDocumentKey'],// 主页文档列表key
			   	'hdp'      => ['幻灯片缓存','FrontendHdpKey'],
                'category' => ['栏目分类缓存','FrontendCategoryKey'],
                'top-smarty' => ['置顶文章缓存','topSmarty'],
                'tui-left-smarty' => ['左侧文章推荐','tuiLeftSmarty'],
                'tag-smarty' => ['首页热门标签','tagSmarty'],
			   	'hot-smarty' => ['首页热评','hotSmarty'],
                'rand-smarty' => ['首页随机文章','randSmarty'],
                'home-right-ad' => ['右侧广告缓存','homeRightAd'],
                'view-bottom-ad' => ['文章页底部广告', 'viewBottomAd'],
                'foot-code' => ['底部信息', 'footCode'],
                'url-list' => ['查看更多缓存','urlList'],
    		],
    		[
    			'pageName' => '列表页缓存',
                'comments' => ['清除最新评论缓存','FrontendCommentsKey'],
                'categoryinfo' => ['清除栏目详情信息','FrontendCategoryInfoKey'],
                'listdocument' => ['清除列表缓存','FrontendListDocumentKey',true],
    		],
    		[
    			'pageName' => '内容页缓存',
                'likedocument' => ['相似文章缓存','FrontendLikeDocumentKey',true],
    		],
    	],
    ],
    'config' => [
        'frontend' => [
            'gg' => '公告管理',
            'title' => '网站标题',
            'keywords' => '网站关键词',
            'description' => '网站描述',
            'weixin_name' => '微信名称',
            'weixin_pic' => '微信图片',
        ],
    ],
];
