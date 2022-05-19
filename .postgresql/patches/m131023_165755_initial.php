<?php


use yii\db\Migration;

class m131023_165755_initial extends Migration
{

    public function up()
    {

        $this->createTable('setting', [
            'id' => 'pk',
            'name' => 'varchar(100) NOT NULL',
            'value' => 'varchar(255) NOT NULL',
            'value_text' => 'text DEFAULT NULL',
            'module_id' => 'varchar(100) DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');


        $this->createTable('module_enabled', [
            'module_id' => 'varchar(100) NOT NULL',
                ], '');

        $this->addPrimaryKey('pk_module_enabled', 'module_enabled', 'module_id');

        // @TODO: This was moved here from queue module
        $this->createTable('queue', [
            'id' => $this->primaryKey(),
            'channel' => $this->string(50)->notNull(),
            'job' => $this->binary()->notNull(),
            'pushed_at' => $this->integer()->notNull(),
            'ttr' => $this->integer()->notNull(),
            'delay' => $this->integer()->notNull(),
            'priority' => $this->integer()->unsigned()->notNull()->defaultValue(1024),
            'reserved_at' => $this->integer(),
            'attempt' => $this->integer(),
            'done_at' => $this->integer(),
        ]);

        // @TODO: This was moved here from queue module
        $this->createTable('queue_exclusive', [
            'id' => $this->string(50)->notNull(),
            'job_message_id' => $this->string(50),
            'job_status' => $this->smallInteger()->defaultValue(2),
            'last_update' => $this->timestamp()
        ]);
        $this->addPrimaryKey('pk_queue_exclusive', 'queue_exclusive', 'id');

        // @TODO: This was moved here from queue module
        $this->alterColumn('queue', 'channel', $this->string(50)->notNull());
    }

    public function down()
    {
        echo "m131023_165755_initial does not support migration down.\n";
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
