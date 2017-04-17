<?php

use yii\db\Migration;

/**
 * Handles the creation of table `invoice`.
 */
class m170417_160751_create_invoice_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('invoice', [
            'id' => $this->primaryKey(),
            'no_invoice' => $this->string(32)->notNull(),
            'date_invoice' => $this->date(),
            'due_date' => $this->date(),
            'customer_id' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'total' => $this->decimal()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('invoice');
    }
}
