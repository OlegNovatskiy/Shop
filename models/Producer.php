<?php

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;
class Producer extends ActiveRecord
{
    public static function tableName(){
        return 'producer';
    }
}
