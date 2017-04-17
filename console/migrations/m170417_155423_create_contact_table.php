<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m170417_155423_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'id_customer' => $this->integer(),
            'id_contact' => $this->integer(),
            'name' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
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
        $this->dropTable('contact');
    }
}
