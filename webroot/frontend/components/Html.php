<?php 

namespace frontend\components;

use Yii;
use yii\helpers\Url;

class Html extends \yii\helpers\Html{

	// oss图片路径组合
	/**
	 * [ossImg description]
	 * @param  string $source  cube-正方形 shape-长方形
	 * @param  array  $options [description]
	 * @return [type]          [description]
	 */
	public static function ossImg($source = 'cube',$options = array(),$style = ''){
		$http = Yii::$app->params['api_oss_http'];
		if(!isset($options['path']) || empty($options['path'])){
			return '';
		}
		if(!isset($options['md5']) || empty($options['md5'])){
			return '';
		}
		if($style == ''){
			return ''; // 样式不能为空
		}
		$path = $options['path'];
		$params = '@!' . $style;
		$filename = $options['md5'] . '_' . $source . '.jpg';
		$src = $http.'/'.$path.'/'.$filename.$params;
		$img = '<img src="'.$src.'">';
		return $img;
	}

	/**
	 * 创建文档的地址
	 * @param  array  $data [description]
	 * @return [type]       [description]
	 */
	public static function toUrl($data = array()){
		if(!is_array($data) || !$data){
			return Url::to(['/']);
		}

		if(isset($data['name']) && !empty($data['name'])){
			return Url::to(['document/view','name'=>$data['name']]);
		}

		return Url::to(['document/view','id'=>$data['id']]);
	}
}