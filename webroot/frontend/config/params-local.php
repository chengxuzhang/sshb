<?php
$baseUrl = "http://api.codegong.com/v1/";

return [
	'beacon_api_path'=> $baseUrl,

	'api_categories' => $baseUrl . 'categories',
	'api_tags' => $baseUrl . 'tags',
	'api_hdps' => $baseUrl . 'hdps',
	'api_hdpList' => $baseUrl . 'hdps/hdpList',
	'api_documents' => $baseUrl . 'documents',
	'api_documentList' => $baseUrl . 'documents/documentList',
	'api_updateView' => $baseUrl . 'documents/updateView',
	'api_tagDocument' => $baseUrl . 'documents/tagDocument',
	'api_tagList' => $baseUrl . 'tags/tagList',
	'api_favorite' => $baseUrl . 'documents/favorite',
	'api_ads' => $baseUrl . 'ads',
	'api_urlList' => $baseUrl . 'urls/urlList',
	'api_nameView' => $baseUrl . 'documents/nameView',

	// 评论接口
	'api_documentComment' => $baseUrl . 'comments/documentComment',
	'api_userComment' => $baseUrl . 'comments/userComment',
	'api_ding' => $baseUrl . 'comments/ding',
	'api_comments' => $baseUrl . 'comments',
	'api_commentCount' => $baseUrl . 'comments/commentCount',
	'api_userCount' => $baseUrl . 'comments/userCount',
	'api_report' => $baseUrl . 'comments/report',
	'api_members' => $baseUrl . 'members',
	'api_openid' => $baseUrl . 'members/openid',
	'api_sign' => $baseUrl . 'members/sign',
	'api_memberAttach' => $baseUrl . 'members/memberAttach',
	'api_memberSign' => $baseUrl . 'members/memberSign',
	'api_config' => $baseUrl . 'comments/config',
	'api_feedbacks' => $baseUrl . 'feedbacks',

	// 多说评论框接口
	'api_counts' => 'http://api.duoshuo.com/threads/counts.json', //?short_name=laog&threads=1
	'api_listRecentPosts' => 'http://laog.duoshuo.com/api/sites/listRecentPosts.json',// ?show_avatars=1&show_time=1&show_admin=1&excerpt_length=70&num_items=10&require=site%2Cvisitor%2Cnonce%2Clang%2Cunread%2Clog%2CextraCss&site_ims=1482290030&referer=http%3A%2F%2Fgongxin.com%2Fstory%2Fwebroot%2Ffrontend%2Fweb%2Fdocument%2Findex%3Fcategory_id%3D39&v=16.6.16

	// 阿里云oss上传接口
	'api_oss_http' => 'http://image.codegong.com',

	// qq获取用户信息接口
	'api_get_user_info' => 'https://graph.qq.com/user/get_user_info', //?access_token=4098C613538840DB48874413EFB75EC3&oauth_consumer_key=101391504&openid=E0C8FE748F09D891DC067CAAD2D05BFB

	// github获取用户信息接口
];
