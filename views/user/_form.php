<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

use app\models\City;
use yii\helpers\ArrayHelper;

/**
* @var yii\web\View $this
* @var app\models\User $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
    'id' => 'User',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-12',
                 'error' => '',
                 'hint' => '',
             ],
         ],
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<div class="row">
  <div class="col-sm-6">
      <?= $form->field($UserDetails, 'name')->textInput(['maxlength' => true]) ?>
      
      
     <?php
    $items = ArrayHelper::map(City::find()->all(), 'id', 'name');

    echo $form->field($UserDetails, 'city_id')
        ->dropDownList(
            $items,           // Flat array ('id'=>'label')
            ['prompt'=>'Select City']    // options
        );


?>
    
      <?= $form->field($UserDetails, 'street_address')->textarea(['rows' => '3']) ?>
      <?= $form->field($UserDetails, 'zip')->textInput(['maxlength' => true]) ?>
      

   <?= $form->field($model, 'gender')->radioList(array('1'=>'Male',2=>'Female',3=>'Diverse')); ?>
	


      
  </div>
  <div class="col-sm-6">
      <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
      <?= $form->field($UserDetails, 'mobile')->textInput(['maxlength' => true]) ?>
      <?= $form->field($BankDetails, 'bank_name')->textInput(['maxlength' => true]) ?> 
       <?= $form->field($BankDetails, 'account_title')->textInput(['maxlength' => true]) ?>
        <?= $form->field($BankDetails, 'account_number')->textInput(['maxlength' => true]) ?>
        
        

<?= $form->field($model, 'type_of_record')->radioList(array('1'=>'Customer',2=>'Supplier',3=>'Others')); ?>
<!-- attribute email -->
      
  </div>

</div>
		 <?= $form->field($Letter, 'title')->textInput(['maxlength' => true]) ?>
    
      <?= $form->field($Letter, 'body')->textarea(['rows' => '6']) ?>

        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'User'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? Yii::t('cruds', 'Create') : Yii::t('cruds', 'Save')),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>
    <style>
   .help-block {
    
   
    display: none;
}


.field-userdetails-street_address > label {

    margin-left: -1%;
}

    </style>

</div>

