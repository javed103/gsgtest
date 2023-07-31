<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Letter]].
 *
 * @see Letter
 */
class LetterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Letter[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Letter|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
