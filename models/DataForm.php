<?php

namespace app\models;
use yii\base\Model;

class DataForm extends Model
{
    public $name;
    public $data;
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username'], 'required'],
            [['username', 'data'], 'string', 'min' => 3],
            // rememberMe must be a boolean value
//            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
//            ['password', 'validatePassword'],
        ];
    }
}