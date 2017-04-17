<?php

use yii\db\Migration;

/**
 * Handles the creation of table `hosting`.
 */
class m170417_152151_create_hosting_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('hosting', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)->notNull(),
            'server_id' => $this->smallInteger()->notNull(),
            'package_code' => $this->string(32)->notNull(),
            'price' => $this->decimal()->notNull(),
            'desc' => $this->text(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('hosting');
    }
}
