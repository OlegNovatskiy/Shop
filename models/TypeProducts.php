<?php

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class TypeProducts extends ActiveRecord
{
    public static function tableName(){
        return 'type_products';
    }
}
