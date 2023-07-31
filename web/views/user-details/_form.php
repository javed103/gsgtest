<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\UserDetails $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="user-details-form">

    <?php $form = ActiveForm::begin([
    'id' => 'UserDetails',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 'label' => 'col-sm-2',
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-8',
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
            

<!-- attribute user_id -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'user_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\User::find()->all(), 'id', 'id'),
    [
        'prompt' => Yii::t('cruds', 'Select'),
        'disabled' => (isset($relAttributes) && isset($relAttributes['user_id'])),
    ]
); ?>

<!-- attribute city_id -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'city_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\City::find()->all(), 'id', 'name'),
    [
        'prompt' => Yii::t('cruds', 'Select'),
        'disabled' => (isset($relAttributes) && isset($relAttributes['city_id'])),
    ]
); ?>

<!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute mobile -->
			<?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

<!-- attribute profile_image -->
			<?= $form->field($model, 'profile_image')->textInput(['maxlength' => true]) ?>

<!-- attribute street_address -->
			<?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

<!-- attribute zip -->
			<?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

<!-- attribute lat -->
			<?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

<!-- attribute lng -->
			<?= $form->field($model, 'lng')->textInput(['maxlength' => true]) ?>

<!-- attribute suburb -->
			<?= $form->field($model, 'suburb')->textInput(['maxlength' => true]) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'UserDetails'),
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

</div>
