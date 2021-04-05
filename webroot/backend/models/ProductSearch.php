<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'uid', 'category_id', 'root', 'pid', 'model_id', 'type', 'position', 'link_id', 'cover_id', 'display', 'deadline', 'attach', 'view', 'comment', 'extend', 'level', 'create_time', 'update_time', 'status'], 'integer'],
            [['name', 'title', 'description', 'cover_url'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
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
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'uid' => $this->uid,
            'category_id' => $this->category_id,
            'root' => $this->root,
            'pid' => $this->pid,
            'model_id' => $this->model_id,
            'type' => $this->type,
            'position' => $this->position,
            'link_id' => $this->link_id,
            'cover_id' => $this->cover_id,
            'display' => $this->display,
            'deadline' => $this->deadline,
            'attach' => $this->attach,
            'view' => $this->view,
            'comment' => $this->comment,
            'extend' => $this->extend,
            'level' => $this->level,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'cover_url', $this->cover_url]);

        return $dataProvider;
    }
}
