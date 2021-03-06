<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-index box box-primary">

    <div class="box-header">
        <?= $this->render('_modal-create'); ?>
        <?= Html::a('<i class="fa fa-print"></i> Export Excel Kelas', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>

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
                'headerOptions' => ['style' => 'text-align:center; width:55px'],
                'contentOptions' => ['style' => 'text-align:center']
            ],
            [
                'attribute' => 'id_jurusan_angkatan',
                'format' => 'raw',
                'value' => function($data) {
                    return @$data->jurusanAngkatan->nama.'</br>'.@$data->jurusanAngkatan->tahun;
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
            ],
            [
                'header' => 'Jumlah Hari',
                'format' => 'raw',
                'value' => function($data) {
                    return $data->manyCountKelasHari;
                },
                'headerOptions' => ['style' => 'text-align:center; width:150px'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'header' => 'Jumlah Pelajaran',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center; width:150px'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
                'contentOptions' => ['style' => 'text-align:center;width:80px']
            ],
        ],
    ]); ?>
    </div>
</div>
