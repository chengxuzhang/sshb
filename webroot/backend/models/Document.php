<?php

namespace backend\models;

use Yii;

class Document extends \backend\components\BaseModel
{

    public $positionParams = [
        self::COMMON_STATUS_ACTIVE => '是',
        self::COMMON_STATUS_DELETED => '否',
    ];

    public $tag;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'category_id', 'root', 'pid', 'model_id', 'type', 'link_id', 'cover_id', 'display', 'deadline', 'attach', 'view', 'comment', 'extend', 'level', 'create_time', 'update_time', 'status'], 'integer'],
            [['category_id','title','status'], 'required'],
            [['name'], 'string', 'max' => 40],
            [['title'], 'string', 'max' => 80],
            [['cover_url'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 140],
            [['tag','position'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '文档ID',
            'uid' => '创建人',
            'name' => '标识',
            'title' => '标题',
            'category_id' => '所属分类',
            'description' => '描述',
            'root' => '根节点',
            'pid' => '所属ID',
            'model_id' => '内容模型ID',
            'type' => '内容类型',
            'position' => '推荐位',
            'link_id' => '外链',
            'cover_id' => '封面',
            'display' => '可见性',
            'deadline' => '截至时间',
            'attach' => '附件数量',
            'view' => '浏览量',
            'comment' => '评论数',
            'extend' => '扩展统计字段',
            'level' => '优先级',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'status' => '数据状态',
            'cover_url'=>'封面链接地址',
            'tag' => '标签',
        ];
    }

    /**
     * 初始化默认的字段
     * @return [type] [description]
     */
    public function doSave(){
        $this->uid = Yii::$app->user->id;
        $this->root = $this->root ? $this->root : 0;
        $this->pid = $this->pid ? $this->pid : 0;
        $this->model_id = $this->model_id ? $this->model_id : 0;
        $this->type = $this->type ? $this->type : 0;
        $this->position = $this->position ? $this->position : self::COMMON_STATUS_DELETED;
        $this->link_id = $this->link_id ? $this->link_id : 0;
        $this->cover_id = $this->cover_id ? $this->cover_id : 0;
        $this->display = $this->display ? $this->display : 0;
        $this->deadline = $this->deadline ? $this->deadline : 0;
        $this->attach = $this->attach ? $this->attach : 0;
        $this->view = $this->view ? $this->view : 0;
        $this->comment = $this->comment ? $this->comment : 0;
        $this->extend = $this->extend ? $this->extend : 0;
        $this->level = $this->level ? $this->level : 0;
        $this->status = $this->status ? $this->status : 10;
        if($this->id && is_numeric($this->id)){
            $this->update_time=time();
        }else{
            $this->create_time=time();
            $this->update_time=$this->create_time;
        }
        return $this->save();
    }

    /**
     * 获取文档分类信息
     * @return [type] [description]
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }

    /**
     * 获取用户信息
     * @return [type] [description]
     */
    public function getUserinfo()
    {
        return $this->hasOne(User::className(),['id'=>'uid']);
    }

    /**
     * 获取封面信息
     * @return [type] [description]
     */
    public function getCoverinfo()
    {
        return $this->hasOne(Picture::className(),['id'=>'cover_id']);
    }

    public function extraFields()
    {
        return ['category','userinfo','coverinfo'];
    }

    /**
     * 获取文档数量
     * @return [type] [description]
     */
    public function getDocumentCount(){
        return $this->find()->count();
    }

    // 求两个时间戳之间的日期
    public function prDates($dt_start,$dt_end){
        $dateArr = array();
        while ($dt_start<=$dt_end){
            $dateArr[ count($dateArr) ] = date('Ymd',$dt_start);
            $dt_start = strtotime('+1 day',$dt_start);
        }
        return $dateArr;
    } 

    public function getFormatData($runType = 1, $res = array(), $params = array()){
        $data = array();
        switch ($runType) {
            case 1:
            $hours = ['00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24'];
            $tempHours = [];
            $tempHoursArray = [];
            
            if(is_array($res) && $res){
                foreach ($res as $k => $v) {
                    $tempHours[ count($tempHours) ] = $v['hours'];
                    $tempHoursArray[$v['hours']] = $v;
                }
            }
            foreach ($hours as $k => $v) {
                if(in_array($v, $tempHours)){
                    $temp = array(
                        'count' => $tempHoursArray[$v]['count'],
                        'display' => $tempHoursArray[$v]['display'],
                        'label' => $v,
                    );
                }else{
                    $temp = array(
                        'count' => 0,
                        'display' => 0,
                        'label' => $v,
                    );
                }
                array_push($data, $temp);
            }
            break;
            
            case 2:
            $days = $this->prDates($params['start'], $params['end']);
            $tempDays = [];
            $tempDaysArray = [];
            if(is_array($res) && $res){
                foreach ($res as $k => $v) {
                    $tempDays[ count($tempDays) ] = $v['days'];
                    $tempDaysArray[$v['days']] = $v;
                }
            }
            foreach ($days as $k => $v) {
                if(in_array($v, $tempDays)){
                    $temp = array(
                        'count' => $tempDaysArray[$v]['count'],
                        'display' => $tempDaysArray[$v]['display'],
                        'label' => $v,
                    );
                }else{
                    $temp = array(
                        'count' => 0,
                        'display' => 0,
                        'label' => $v,
                    );
                }
                array_push($data, $temp);
            }
            break;
            case 3:
            $result = array_reverse($res);
            foreach ($result as $k => $v) {
                $temp = array(
                    'count' => $v['count'],
                    'display' => $v['display'],
                    'label' => $v['months'],
                );
                array_push($data, $temp);
            }
            break;
        }
        return $data;
    }

    public function getMonthCount($date = 'default'){
        if($date == 'default'){
            $startTime = time() - (12 * 30 * 24 * 60 * 60);
            $endTime = time();
        }else{
            $fomatTime = explode('|', $date);
            $startTime = strtotime($fomatTime[0]);
            $endTime = strtotime($fomatTime[1]);
        }
        $params = array('start'=>$startTime, 'end'=>$endTime);
        $where = "create_time between " . $startTime . " and " . $endTime;

        $connection  = Yii::$app->db;
        $timeLen = $endTime - $startTime;
        if($timeLen <= 24 * 60 * 60){
            $sql = "SELECT FROM_UNIXTIME(create_time,'%h') hours,count(id) count,sum(case when display=10 then 1 else 0 end) display FROM document WHERE " . $where . " GROUP BY hours ORDER BY hours DESC";
            $runType = 1;
        }else if($timeLen > 24 * 60 * 60 && $timeLen < 31 * 24 * 60 * 60){
            $sql = "SELECT FROM_UNIXTIME(create_time,'%Y%m%d') days,COUNT(id) count,sum(case when display=10 then 1 else 0 end) display FROM document WHERE " . $where . " GROUP BY days ORDER BY days DESC";
            $runType = 2;
        }else{
            $sql = "SELECT FROM_UNIXTIME(create_time,'%Y%m') months,COUNT(id) count,sum(case when display=10 then 1 else 0 end) display FROM document WHERE " . $where . " GROUP BY months ORDER BY months DESC";
            $runType = 3;
        }
        $command = $connection->createCommand($sql);
        $res = $command->queryAll();

        $result = $this->getFormatData($runType,$res,$params);
        
        return ['status'=>200,'message'=>'ok','data'=>$result];
    }

    public function getCategoryDocumentCount(){
        $connection  = Yii::$app->db;
        $sql = "SELECT COUNT(document.id) count,category.title FROM document LEFT JOIN category ON document.category_id = category.id GROUP BY document.category_id";
        $command = $connection->createCommand($sql);
        return $command->queryAll();
    }
}
