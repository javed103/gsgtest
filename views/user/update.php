<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\User $model
*/

$this->title = Yii::t('models', 'User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'User'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud user-update">

    <h1>
        <?= Yii::t('models', 'User') ?>
        <small>
                        <?= Html::encode($model->id) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
   'UserDetails' => $UserDetails,
    'BankDetails' => $BankDetails,
    'Letter' => $Letter,
    'City' => $City,
    'model' => $model
    ]); ?>

</div>
