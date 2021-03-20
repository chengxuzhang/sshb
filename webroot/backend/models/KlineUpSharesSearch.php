<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KlineUpShares;

/**
 * KlineUpSharesSearch represents the model behind the search form about `backend\models\KlineUpShares`.
 */
class KlineUpSharesSearch extends KlineUpShares
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_thirty_up', 'is_sixty_up', 'is_sun', 'is_one_down', 'is_more_head', 'is_five_up', 'is_two_down', 'is_fall_stop',
                'is_up_to_down', 'is_down_to_up', 'is_kline_rise_five', 'five_day_uptodown', 'five_day_downtoup', 'is_five_bottom'], 'integer'],
            [['scode', 'sname', 'create_time'], 'safe'],
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
        $query = KlineUpShares::find();

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
            'is_thirty_up' => $this->is_thirty_up,
            'is_sixty_up' => $this->is_sixty_up,
            'is_sun' => $this->is_sun,
            'is_one_down' => $this->is_one_down,
            'is_more_head' => $this->is_more_head,
            'is_five_up' => $this->is_five_up,
            'is_fall_stop' => $this->is_fall_stop,
            'is_up_to_down' => $this->is_up_to_down,
            'is_down_to_up' => $this->is_down_to_up,
            'is_two_down' => $this->is_two_down,
            'is_kline_rise_five' => $this->is_kline_rise_five,
            'five_day_uptodown' => $this->five_day_uptodown,
            'five_day_downtoup' => $this->five_day_downtoup,
            'is_five_bottom' => $this->is_five_bottom,
        ]);

        $query->andFilterWhere(['like', 'scode', $this->scode])
            ->andFilterWhere(['like', 'sname', $this->sname])
            ->andFilterWhere(['like', 'create_time', $this->create_time]);

        return $dataProvider;
    }
}
