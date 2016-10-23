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
        $data['products'] = Products::find()->limit(4);
        $data['products'] = $data['products']->all();
        $data['producer'] = Producer::find();
        $data['producer'] = $data['producer']->all();
        return $this->render('index', compact('data'));
    }

    public function actionCategory(){
        $data=array();
        return $this->render('category', compact('data'));
    }

    public function actionHello(){
        return "Hello World!!!";
    }

}