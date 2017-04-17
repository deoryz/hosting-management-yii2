<?php

use yii\db\Migration;

/**
 * Handles the creation of table `service_hosting`.
 */
class m170417_155631_create_service_hosting_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('service_hosting', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'domain_name' => $this->string(100)->notNull(),
            'username' => $this->string(100)->notNull(),
            'hosting_id' => $this->integer()->notNull(),
            'expired_date' => $this->date(),
            'billing_cycle' => $this->integer(),
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
        $this->dropTable('service_hosting');
    }
}
