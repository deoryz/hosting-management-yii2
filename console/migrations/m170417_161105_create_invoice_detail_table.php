<?php

use yii\db\Migration;

/**
 * Handles the creation of table `invoice_detail`.
 */
class m170417_161105_create_invoice_detail_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('invoice_detail', [
            'id' => $this->primaryKey(),
            'invoice_id' => $this->integer()->notNull(),
            'type' => $this->string(32)->notNull(),
            'service_id' => $this->integer()->notNull(),
            'desc' => $this->text()->notNull(),
            'sub_total' => $this->decimal()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('invoice_detail');
    }
}
