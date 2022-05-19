<?php


use yii\db\Migration;

class m131023_165625_initial extends Migration
{

    public function up()
    {

        $this->createTable('wall', [
            'id' => 'pk',
            'type' => 'varchar(45) DEFAULT NULL',
            'object_model' => 'varchar(50) NOT NULL',
            'object_id' => 'integer NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');

        $this->createTable('wall_entry', [
            'id' => 'pk',
            'wall_id' => 'integer NOT NULL',
            'content_id' => 'integer NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');


        $this->createTable('content', [
            'id' => 'pk',
            'guid' => 'varchar(45) NOT NULL',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'integer NOT NULL',
            'visibility' => 'smallint DEFAULT NULL',
            'sticked' => 'smallint DEFAULT NULL',
            'archived' => 'text DEFAULT NULL',
            'space_id' => 'integer DEFAULT NULL',
            'user_id' => 'integer DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');
    }

    public function down()
    {
        echo "m131023_165625_initial does not support migration down.\n";
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
