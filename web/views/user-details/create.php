<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\UserDetails $model
*/

$this->title = Yii::t('models', 'User Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'User Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud user-details-create">

    <h1>
        <?= Yii::t('models', 'User Details') ?>
        <small>
                        <?= Html::encode($model->name) ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            Yii::t('cruds', 'Cancel'),
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
