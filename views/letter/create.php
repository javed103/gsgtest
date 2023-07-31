<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Letter $model
*/

$this->title = Yii::t('models', 'Letter');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Letters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud letter-create">

    <h1>
        <?= Yii::t('models', 'Letter') ?>
        <small>
                        <?= Html::encode($model->title) ?>
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
