<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
* UserSearch represents the model behind the search form about `app\models\User`.
*/
class UserSearch extends User
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'status', 'gender', 'type_of_record', 'created_at', 'updated_at'], 'integer'],
            [['email', 'unique_address_number', 'access_token'], 'safe'],
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
$query = User::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'gender' => $this->gender,
            'type_of_record' => $this->type_of_record,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'unique_address_number', $this->unique_address_number])
            ->andFilterWhere(['like', 'access_token', $this->access_token]);

return $dataProvider;
}
}