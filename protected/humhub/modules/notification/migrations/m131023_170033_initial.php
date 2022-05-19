<?php


use yii\db\Migration;

class m131023_170033_initial extends Migration
{

    public function up()
    {
        $this->createTable('notification', [
            'id' => 'pk',
            'class' => 'varchar(100) NOT NULL',
            'user_id' => 'integer NOT NULL',
            'seen' => 'smallint DEFAULT NULL',
            'source_object_model' => 'varchar(100) DEFAULT NULL',
            'source_object_id' => 'integer DEFAULT NULL',
            'target_object_model' => 'varchar(100) DEFAULT NULL',
            'target_object_id' => 'integer DEFAULT NULL',
            'space_id' => 'integer DEFAULT NULL',
            'emailed' => 'smallint NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'integer NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'integer NOT NULL',
                ], '');
    }

    public function down()
    {
        echo "m131023_170033_initial does not support migration down.\n";
        return false;
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
