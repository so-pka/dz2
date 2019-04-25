<?php

namespace app\models;

use yii\base\Model;
use app\validators\taskvalidator;

class Task extends Model
{
    public $title;
    public $description;
    public $author;
    public $responsible;
    public $status;

       public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['title'], 'string', 'max' => 10],
            [['status'], TaskValidator::className()],
            [['author', 'responsible'], 'safe']
        ];
    }


    public function fields()
    {
        return [
            'header' => 'title',
            'description'
        ];
    }
}