<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KelasHariSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kelas Hari';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-hari-index box box-primary">

    <div class="box-header">
        <?= Html::a('<i class="fa fa-plus"></i> Tambah Kelas Hari', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-print"></i> Export Excel Kelas Hari', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>

    </div>

    <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center']
            ],

            [
                'attribute' => 'id',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_kelas',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_hari',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center;width:80px']
            ],
        ],
    ]); ?>
    </div>
</div>
