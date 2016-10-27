<?php

namespace app\controllers;

use app\models\Producer;
use app\models\Products;
use app\models\TypeProducts;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ProductsController extends Controller{
    public function actionIndex(){
        $data = array();
        $data['type'] = TypeProducts::find();
        $data['type'] = $data['type']->all();
        //oleggsfgsdf
        $data['products'] = Products::find()->limit(4);
        $data['products'] = $data['products']->all();
        $data['producer'] = Producer::find();
        $data['producer'] = $data['producer']->all();
        return $this->render('index', compact('data'));
    }

    public function actionCategory(){
        $data = array();
        $data['type'] = TypeProducts::find();
        $data['type'] = $data['type']->all();
        //oleggsfgsdf
        $products = Products::find();

        $data['page'] = new \yii\data\Pagination(['totalCount' => $products->count(), 'pageSize' => 9 ]);
        $data['products'] = $products->offset($data['page']->offset)->limit($data['page']->limit)->all();

        $data['producer'] = Producer::find()->all();
        return $this->render('category', compact('data'));
    }

    public function actionHello(){
        return "Hello World!!!";
    }

    public function actionAddlike(){
        //  return $this->render('index');
        //$id_product = Yii::$app->request->post('id_product');
        if (Yii::$app->request->isAjax) {
            $id_product = Yii::$app->request->post('id_product');
            Products::upLike($id_product);//updateAll(['like' => 1], ['like', 'id_product', Yii::$app->request->post('id_product')]);

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return [
                'code' => 100
            ];
        }

    }

}