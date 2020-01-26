<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_categories_table extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array('type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true),
            'name' => array('type' => 'VARCHAR', 'constraint' => '100','null' => true),
            'active' => array('type' => 'INT','constraint' => 1,'null' => true),
            'last_update' => array('type' => 'DATETIME', 'null' => true),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('categories');
    }

    public function down()
    {
        $this->dbforge->drop_table('categories');
    }
}
