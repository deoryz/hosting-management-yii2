<?php

use yii\db\Migration;

/**
 * Handles the creation of table `server`.
 */
class m170417_153120_create_server_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('server', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)->notNull(),
            'username' => $this->string(32)->notNull()->defaultValue('root'),
            'key' => $this->text()->notNull(),
            'ip' => $this->string(32)->notNull(),
            'port' => $this->smallInteger()->defaultValue(2087),
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
        $this->dropTable('server');
    }
}
