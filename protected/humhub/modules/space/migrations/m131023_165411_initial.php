<?php


use yii\db\Migration;

class m131023_165411_initial extends Migration {

    public function up() {
        $this->createTable('space', [
            'id' => 'pk',
            'guid' => 'varchar(45) DEFAULT NULL',
            'wall_id' => 'integer DEFAULT NULL',
            'name' => 'varchar(45) NOT NULL',
            'description' => 'text DEFAULT NULL',
            'website' => 'varchar(45) DEFAULT NULL',
            'join_policy' => 'smallint DEFAULT NULL',
            'visibility' => 'smallint DEFAULT NULL',
            'status' => 'smallint NOT NULL DEFAULT \'1\'',
            'tags' => 'text DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');

        $this->createTable('space_follow', [
            'user_id' => 'integer NOT NULL',
            'space_id' => 'integer NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');

        $this->addPrimaryKey('pk_space_follow', 'space_follow', 'user_id,space_id');

        $this->createTable('space_module', [
            'id' => 'pk',
            'module_id' => 'varchar(255) NOT NULL',
            'space_id' => 'integer NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'integer NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'integer NOT NULL',
                ], '');
    }

    public function down() {
        echo "m131023_165411_initial does not support migration down.\n";
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
