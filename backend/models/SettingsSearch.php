<?php

namespace yuncms\core\backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yuncms\core\models\Settings;

/**
 * SettingSearch represents the model behind the search form about `pheme\settings\models\Setting`.
 *
 * @author Aris Karageorgos <aris@phe.me>
 */
class SettingsSearch extends Settings
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['active'], 'boolean'],
            [['type', 'section', 'key', 'value', 'created', 'modified'], 'safe'],
        ];
    }

    /**
     * @return array
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Settings::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'active' => $this->active,
            'section' => $this->section,
        ]);

        $query->andFilterWhere(['like', 'key', $this->key])
            ->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
