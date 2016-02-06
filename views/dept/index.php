<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DeptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Depts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dept-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dept', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Dept',
            'parent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
