<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\News;

/**
* NewsSearch represents the model behind the search form of `common\models\News`.
*/
class NewsSearch extends News
{
/**
* {@inheritdoc}
*/
public function rules()
{
return [
[['id', 'date', 'category_id', 'status'], 'integer'],
            [['slug', 'img'], 'safe'],
];
}

/**
* {@inheritdoc}
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
$query = News::find();

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
            'date' => $this->date,
            'category_id' => $this->category_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'img', $this->img]);

return $dataProvider;
}
}
