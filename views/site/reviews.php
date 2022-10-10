<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use app\models\User;

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php Pjax::begin(); ?>
    <?php if(Yii::$app->session->hasFlash('success')): ?>
        <div>
            <?php echo Yii::$app->session->getFlash('success');?>
        <div>
    <?endif;?>

    <?php $form = ActiveForm::begin(['options'=>['data-pjax' => true]]); ?>

    <?= $form->field($model, 'name')->label("Имя") ?>

    <?= $form->field($model, 'text')->textarea()->label('Текст') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить на модерацию', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            'text',
            'date',
        ],
    ]) ?>
</div>
