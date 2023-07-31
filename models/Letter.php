<?php

namespace app\models;

use Yii;
use \app\models\base\Letter as BaseLetter;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "letter".
 */
class Letter extends BaseLetter
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
