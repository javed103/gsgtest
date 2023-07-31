<?php

namespace app\models;

use Yii;
use \app\models\base\UserDetails as BaseUserDetails;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user_details".
 */
class UserDetails extends BaseUserDetails
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
