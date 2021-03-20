<?php

namespace backend\models;

use yii\data\ActiveDataProvider;

class UserCouserTestLog extends \backend\components\BaseModel
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pl_user_couser_test_log';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'course' => '课程名称',
            'score' => '得分/总分',
            'member' => '用户',
            'test-time' => '测试时间',
            'test_count' => '测试次数',
            'max_try_times' => '最多允许测试次数'
        ];
    }

    public function getCourseTest() {
        return $this->hasOne(CouserTest::className(), ['id' => 'testId']);
    }

    public function getCourse() {
        return $this->hasOne(LineCouser::className(), ['id' => 'lcId'])->via('courseTest');
    }

    public function getMember() {
        return $this->hasOne(Member::className(), ['id' => 'userId']);
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UserCouserTestLog::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            return $dataProvider;
        }

        // $query->leftJoin('pl_couser_test t', 'lcId = t.id');
        $query->joinWith('course');
        $query->joinWith('member');

        // grid filtering conditions
        $query->andFilterWhere([]);
        $query->orderBy(['id' => SORT_DESC]);

        return $dataProvider;
    }
}
