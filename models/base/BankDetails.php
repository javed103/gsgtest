<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "bank_details".
 *
 * @property integer $id
 * @property string $bank_name
 * @property string $account_title
 * @property string $account_number
 * @property integer $status
 * @property integer $created_by
 * @property string $created_at
 *
 * @property \app\models\User $createdBy
 * @property string $aliasModel
 */
abstract class BankDetails extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank_details';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
                'updatedByAttribute' => false,
            ],
            [
                'class' => TimestampBehavior::className(),
                'updatedAtAttribute' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank_name', 'account_title', 'account_number'], 'required'],
            [['status'], 'integer'],
            [['bank_name', 'account_title'], 'string', 'max' => 32],
            [['account_number'], 'string', 'max' => 50],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'bank_name' => Yii::t('models', 'Bank Name'),
            'account_title' => Yii::t('models', 'Account Title'),
            'account_number' => Yii::t('models', 'Account Number'),
            'created_by' => Yii::t('models', 'Created By'),
            'created_at' => Yii::t('models', 'Created At'),
            'status' => Yii::t('models', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(\app\models\User::className(), ['id' => 'created_by']);
    }


    
    /**
     * @inheritdoc
     * @return \app\models\BankDetailsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\BankDetailsQuery(get_called_class());
    }


}
