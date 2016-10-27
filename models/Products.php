<?php

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class Products extends ActiveRecord
{
    public static function tableName(){
        return 'products';
    }
    public static function upLike($id_product){
        $product = Products::find()->where(['id_product' => $id_product])->one();
        $product->like = $product->like +1;
        $product->save();
    }
}
