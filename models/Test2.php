<?php

namespace app\models;

class Test2 extends \yii\base\BaseObject
{
    public $ID;
    public $Name;

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return (new \yii\db\Query())
        ->select(['ID', 'Name'])
        ->from('test2')
        ->where(['id' => $id])
        ->all();
    }

    public static function listTests()
    {
        return (new \yii\db\Query())
        ->select(['ID', 'Name'])
        ->from('test2')
        ->all();
    }
}