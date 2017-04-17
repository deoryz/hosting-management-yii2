<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 */
class m170417_154649_create_customer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull(),
            'birth_date' => $this->date()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'id_customer' => $this->integer(),
            'password' => $this->string(100)->notNull(),
            'company' => $this->string(100)->notNull(),
            'address_line_1' => $this->string(100)->notNull(),
            'address_line_2' => $this->string(100),
            'address_line_3' => $this->string(100),
            'city' => $this->string(100)->notNull(),
            'state' => $this->string(100)->notNull(),
            'country_code' => $this->string(100)->notNull(),
            'zipcode' => $this->string(100)->notNull(),
            'tel_cc_code' => $this->string(100)->notNull(),
            'tel_no' => $this->string(100)->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('customer');
    }
}
