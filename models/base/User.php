<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "user".
 *
 * @property integer $id
 * @property string $email
 * @property integer $status
 * @property integer $gender
 * @property integer $type_of_record
 * @property string $unique_address_number
 * @property string $access_token
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \app\models\BankDetails[] $bankDetails
 * @property \app\models\City[] $cities
 * @property \app\models\Letter[] $letters
 * @property \app\models\UserDetails[] $userDetails
 * @property string $aliasModel
 */
abstract class User extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'gender', 'type_of_record'], 'integer'],
            [['gender', 'type_of_record','email'], 'required'],
            [['email'], 'string', 'max' => 255],
             [['email'], 'email'],
             [['email'], 'unique'],
             [['unique_address_number'], 'unique'],
            [['unique_address_number'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'email' => Yii::t('models', 'Email'),
            'status' => Yii::t('models', 'Status'),
            'gender' => Yii::t('models', 'Gender'),
            'type_of_record' => Yii::t('models', 'Type of records'),
            'unique_address_number' => Yii::t('models', 'Unique Address Number'),
            'created_at' => Yii::t('models', 'Created At'),
            
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'gender' => Yii::t('models', '1 Male 2 Female 3 Diverse'),
            'type_of_record' => Yii::t('models', '1 Customer 2 Supplier 3 Others'),
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankDetails()
    {
        return $this->hasMany(\app\models\BankDetails::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(\app\models\City::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLetters()
    {
        return $this->hasMany(\app\models\Letter::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserDetails()
    {
        return $this->hasMany(\app\models\UserDetails::className(), ['user_id' => 'id']);
    }


public function getGenderHTML() {
		$class = 'label label-success';
		$text = 'Male';
		
		if($this->gender == 1) 
		{
			$class = 'label label-sucess';
			$text = 'Male';
		}
		
			if($this->gender == 3) 
		{
			$class = 'label label-danger';
			$text = 'Diverse';
		}
		
		if($this->gender == 2) 
		{
			$class = 'label label-warning';
			$text = 'Female';
		}
		
		return Yii::$app->util->getLabel($class,$text);
	}
	
	public function getTypeHTML() {
		$class = 'label label-success';
		$text = 'Customer';
		
		if($this->type_of_record == 3) 
		{
			$class = 'label label-danger';
			$text = 'Other';
		}
		
			if($this->type_of_record == 1) 
		{
			$class = 'label label-success';
			$text = 'Customer';
		}
		
		if($this->type_of_record == 2) 
		{
			$class = 'label label-warning';
			$text = 'Suplier';
		}
		
		return Yii::$app->util->getLabel($class,$text);
	}
	
	
	public function getStatusHTML() {
		$class = 'label label-success';
		$text = 'Active';
		
		if($this->status == 0) 
		{
			$class = 'label label-danger';
			$text = 'Inactive';
		}
		return Yii::$app->util->getLabel($class,$text);
	}

    
    /**
     * @inheritdoc
     * @return \app\models\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\UserQuery(get_called_class());
    }


}
