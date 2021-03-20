<?php
namespace backend\components;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\data\Pagination;

class NextUrlPager extends Widget
{
	public $pagination;

	public function init()
    {
        if ($this->pagination === null) {
            throw new InvalidConfigException('The "pagination" property must be set.');
        }
    }

    /**
     * Executes the widget.
     * This overrides the parent implementation by displaying the generated page buttons.
     */
    public function run()
    {
        $currentPage = $this->pagination->getPage();
        $pageCount = $this->pagination->getPageCount();
        if(($page = $currentPage + 1) >= $pageCount - 1){
            $page = $pageCount - 1;
            echo '';
        }else{
        	echo '<a href="'.$this->pagination->createUrl($page).'">加载更多</a>';
        }
    }
}