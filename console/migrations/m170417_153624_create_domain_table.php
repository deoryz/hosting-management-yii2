<?php

use yii\db\Migration;

/**
 * Handles the creation of table `domain`.
 */
class m170417_153624_create_domain_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('domain', [
            'id' => $this->primaryKey(),
            'tld' => $this->string(32)->notNull(),
            'price_new' => $this->double()->notNull(),
            'price_renew' => $this->double()->notNull(),
            'price_transfer' => $this->double()->notNull(),
            'price_privacy' => $this->double()->notNull(),
            'registrar_id' => $this->smallInteger()->notNull()->defaultValue(10),
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
        $this->dropTable('domain');
    }
}
