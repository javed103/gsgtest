<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\UserDetails $model
*/

$this->title = Yii::t('models', 'User Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'User Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud user-details-update">

    <h1>
        <?= Yii::t('models', 'User Details') ?>
        <small>
                        <?= Html::encode($model->name) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
