<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Video;

/**
* VideoSearch represents the model behind the search form of `common\models\Video`.
*/
class VideoSearch extends Video
{
/**
* {@inheritdoc}
*/
public function rules()
{
return [
[['id', 'date', 'status'], 'integer'],
            [['video', 'img'], 'safe'],
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
$query = Video::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'img', $this->img]);

return $dataProvider;
}
}
