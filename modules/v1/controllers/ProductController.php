<?php

namespace app\modules\v1\controllers;

use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;

/**
 * Default controller for the `v1` module
 */
class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Products';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
            //có thể thêm nhiều cách xác thực khác
            'except' => ['test'],
            'optional' => ['hello']
        ];
        return $behaviors;
    }

    public function actionTest()
    {
        return ['message'=>'Hello World'];
    }
    public function actionHello()
    {
        return ['message'=>'Hello World 123'];
    }
}

