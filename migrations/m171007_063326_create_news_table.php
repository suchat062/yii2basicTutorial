<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m171007_063326_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => \yii\db\Schema::TYPE_PK,
            'title' => \yii\db\Schema::TYPE_STRING . ' NOT NULL',
            'content' => \yii\db\Schema::TYPE_TEXT
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
