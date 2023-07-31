<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\UserDetailsSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="user-details-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'user_id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'mobile') ?>

		<?= $form->field($model, 'profile_image') ?>

		<?php // echo $form->field($model, 'city_id') ?>

		<?php // echo $form->field($model, 'street_address') ?>

		<?php // echo $form->field($model, 'zip') ?>

		<?php // echo $form->field($model, 'lat') ?>

		<?php // echo $form->field($model, 'lng') ?>

		<?php // echo $form->field($model, 'suburb') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
