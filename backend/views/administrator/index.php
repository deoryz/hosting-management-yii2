<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index box">
    <div class="box-body">

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
        <p>
            <?= Html::a(Yii::t('app', 'Create Users'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
                <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
            </div>
</div>
