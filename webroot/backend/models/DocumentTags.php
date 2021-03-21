<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "document_tags".
 *
 * @property integer $aid
 * @property integer $tid
 */
class DocumentTags extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aid', 'tid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'tid' => 'Tid',
        ];
    }

    /**
     * 根据文档id获取所有的标签id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getTidsByDocumentId($id){
        if(!is_numeric($id) || !$id){
            return false;
        }

        $condition = ['aid'=>$id];
        $result = $this->find()->where($condition)->all();
        if($result){
            return ArrayHelper::getColumn($result,'tid');
        }
        return false;
    }

    /**
     * 设置标签
     */
    public function setTags($aid,$tags){
        // 删除所有和该文章有关的标签
        Yii::$app->db->createCommand()
                     ->delete(self::tableName(), 'aid = '.$aid)
                     ->execute();
        // 组合field
        $field = ['aid','tid'];
        $create = [];
        foreach ($tags as $key => $val) {
            $create[] = [$aid,$val];
        }
        Yii::$app->db->createCommand()
                     ->batchInsert(self::tableName(),$field,$create)
                     ->execute();
        return true;
    }

    /**
     * 删除对应表关系 根据文章id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delDataByDocumentId($id){
        Yii::$app->db->createCommand()
                     ->delete(self::tableName(), 'aid = '.$id)
                     ->execute();
        return true;
    }

    /**
     * 删除对应表关系 根据标签id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delDataByTagId($id){
        Yii::$app->db->createCommand()
                     ->delete(self::tableName(), 'tid = '.$id)
                     ->execute();
        return true;
    }
}
