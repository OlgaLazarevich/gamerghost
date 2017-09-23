<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class Helga extends ActiveRecord
{


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['Name'], 'required']
        ];
    }


public static function tableName()
{
        
        return 'helga';
}
}

