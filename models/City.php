<?php

namespace app\models;

use Yii;
use \app\models\base\City as BaseCity;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "city".
 */
class City extends BaseCity
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
