<?php

use yii\db\Migration;

/**
 * Handles the creation of table `service_domain`.
 */
class m170417_160514_create_service_domain_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('service_domain', [
            'id' => $this->primaryKey(),
            'id_customer' => $this->integer(),
            'domain_name' => $this->string(100)->notNull(),
            'tld' => $this->string(32)->notNull(),
            'expired_date' => $this->date(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'registrant_contact_id' => $this->integer()->notNull(),
            'billing_contact_id' => $this->integer()->notNull(),
            'admin_contact_id' => $this->integer()->notNull(),
            'tech_contact_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('service_domain');
    }
}
