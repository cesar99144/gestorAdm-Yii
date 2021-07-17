<?php

use app\models\Categorias;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdutosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produtos cadastrados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-index">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <p>
        <?= Html::a('Adicionar produtos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'preco',
            'idcategoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
