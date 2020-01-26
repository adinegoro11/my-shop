<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_users_table extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
                'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => true,
                        'auto_increment' => true
                ),
                'username' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        'null' => true,
                ),
                'password' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        'null' => true,
                ),
                'deleted' => array(
                        'type' => 'INT',
                        'null' => true,
                ),
                'last_update' => array(
                        'type' => 'DATETIME',
                        'null' => true,
                ),
                ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
