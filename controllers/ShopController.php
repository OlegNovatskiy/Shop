<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Blog;
use yii\web\HttpException;

class ShopController extends Controller{
    public function actionIndex(){

        $data = array();
        $data['header_title'] = 'Магазин електротехніки';
        $data['title_page'] = 'Товари';
        return $this->render('index', compact('data'));
    }
    public function actionCategory()
    {
        $data = array();
        $data['header_title'] = 'Магазин електротехніки';
        $data['title_page'] = 'Товари';
        return $this->render('category', compact('data'));
    }
}