<?php


use yii\db\Migration;

class m131023_170253_initial extends Migration
{

    public function up()
    {
        $this->createTable('comment', [
            'id' => 'pk',
            'message' => 'text DEFAULT NULL',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'integer NOT NULL',
            'space_id' => 'integer DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('comment');
    }

}
