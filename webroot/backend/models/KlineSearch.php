<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kline;

/**
 * KlineSearch represents the model behind the search form about `backend\models\Kline`.
 */
class KlineSearch extends Kline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['scode', 'riqi'], 'safe'],
            [['kp', 'sp', 'zg', 'zd', 'zdf', 'zde', 'cjl', 'cje', 'zf', 'hsl'], 'number'],
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
        $query = Kline::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'kp' => $this->kp,
            'sp' => $this->sp,
            'zg' => $this->zg,
            'zd' => $this->zd,
            'zdf' => $this->zdf,
            'zde' => $this->zde,
            'cjl' => $this->cjl,
            'cje' => $this->cje,
            'zf' => $this->zf,
            'hsl' => $this->hsl,
        ]);

        $query->andFilterWhere(['scode' => $this->scode])
            ->andFilterWhere(['riqi' => $this->riqi]);

        $query->orderBy("riqi desc");

        $query->with("shares");

        return $dataProvider;
    }
}
