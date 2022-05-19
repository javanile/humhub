<?php


use yii\db\Migration;

class m131023_164513_initial extends Migration
{

    public function up()
    {

        $this->createTable('group', [
            'id' => 'pk',
            'space_id' => 'integer DEFAULT NULL',
            'name' => 'varchar(45) DEFAULT NULL',
            'description' => 'text DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');

        $this->createTable('group_admin', [
            'id' => 'pk',
            'user_id' => 'integer NOT NULL',
            'group_id' => 'integer NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'integer NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'integer NOT NULL',
                ], '');


        $this->createTable('profile', [
            'user_id' => 'integer NOT NULL',
                ], '');

        $this->addPrimaryKey('pk_profile', 'profile', 'user_id');

        $this->createTable('profile_field', [
            'id' => 'pk',
            'profile_field_category_id' => 'integer NOT NULL',
            'module_id' => 'varchar(255) DEFAULT NULL',
            'field_type_class' => 'varchar(255) NOT NULL',
            'field_type_config' => 'text DEFAULT NULL',
            'internal_name' => 'varchar(100) NOT NULL',
            'title' => 'varchar(255) NOT NULL',
            'description' => 'text DEFAULT NULL',
            'sort_order' => 'integer NOT NULL',
            'required' => 'smallint DEFAULT NULL',
            'show_at_registration' => 'smallint DEFAULT NULL',
            'editable' => 'smallint NOT NULL DEFAULT \'1\'',
            'visible' => 'smallint NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');

        $this->createTable('profile_field_category', [
            'id' => 'pk',
            'title' => 'varchar(255) NOT NULL',
            'description' => 'text NOT NULL',
            'sort_order' => 'integer NOT NULL',
            'module_id' => 'integer DEFAULT NULL',
            'visibility' => 'smallint NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');


        $this->createTable('user', [
            'id' => 'pk',
            'guid' => 'varchar(45) DEFAULT NULL',
            'user_invite_id' => 'integer DEFAULT NULL',
            'wall_id' => 'integer DEFAULT NULL',
            'group_id' => 'integer DEFAULT NULL',
            'status' => 'smallint NOT NULL DEFAULT \'2\'',
            'super_admin' => 'smallint NOT NULL',
            'username' => 'varchar(25) DEFAULT NULL',
            'email' => 'varchar(100) DEFAULT NULL',
            'password' => 'varchar(200) DEFAULT NULL',
            'auth_mode' => 'varchar(10) NOT NULL',
            'tags' => 'text DEFAULT NULL',
            'language' => 'varchar(5) NOT NULL',
            'receive_email_notifications' => 'smallint NOT NULL',
            'receive_email_messaging' => 'smallint NOT NULL',
            'receive_email_activities' => 'smallint NOT NULL',
            'last_activity_email' => 'datetime NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');

        $this->createTable('user_content', [
            'id' => 'pk',
            'user_id' => 'integer NOT NULL',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'integer NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'integer NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'integer NOT NULL',
                ], '');

        $this->createTable('user_follow', [
            'user_follower_id' => 'integer NOT NULL',
            'user_followed_id' => 'integer NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');

        $this->addPrimaryKey('pk_user_follow', 'user_follow', 'user_follower_id,user_followed_id');


        try {
            // May already created
            $this->createTable('user_http_session', [
                'id' => 'char(32) NOT NULL',
                'expire' => 'integer DEFAULT NULL',
                'user_id' => 'integer DEFAULT NULL',
                'data' => 'bytea DEFAULT NULL',
                    ], '');
            $this->addPrimaryKey('pk_user_http_session', 'user_http_session', 'id');
        } catch (Exception $ex) {
            
        }



        $this->createTable('user_invite', [
            'id' => 'pk',
            'user_originator_id' => 'integer DEFAULT NULL',
            'space_invite_id' => 'integer DEFAULT NULL',
            'email' => 'varchar(45) NOT NULL',
            'source' => 'varchar(45) DEFAULT NULL',
            'token' => 'varchar(45) DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');


        $this->createTable('user_space_membership', [
            'space_id' => 'integer NOT NULL',
            'user_id' => 'integer NOT NULL',
            'originator_user_id' => 'varchar(45) DEFAULT NULL',
            'status' => 'smallint DEFAULT NULL',
            'request_message' => 'text DEFAULT NULL',
            'last_visit' => 'datetime DEFAULT NULL',
            'invite_role' => 'smallint DEFAULT NULL',
            'admin_role' => 'smallint DEFAULT NULL',
            'share_role' => 'smallint DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'integer DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'integer DEFAULT NULL',
                ], '');


        $this->createTable('user_module', [
            'id' => 'pk',
            'module_id' => 'varchar(255) NOT NULL',
            'user_id' => 'integer NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'integer NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'integer NOT NULL',
                ], '');

        $this->addPrimaryKey('pk_user_space_membership', 'user_space_membership', 'space_id,user_id');
    }

    public function down()
    {
        echo "m131023_164513_initial does not support migration down.\n";
        return false;

        $this->dropTable('user');
        $this->dropTable('user_content');
        $this->dropTable('user_follow');
        $this->dropTable('user_http_session');
        $this->dropTable('user_invite');
        $this->dropTable('user_module');
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
