<?php

use yii\db\Migration;

/**
 * Handles the creation of table `registrar`.
 */
class m170417_154015_create_registrar_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('registrar', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)->notNull(),
            'id_reseller' => $this->string(32)->notNull(),
            'key' => $this->text()->notNull(),
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
        $this->dropTable('registrar');
    }
}
