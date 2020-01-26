<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_column_category_id extends CI_Migration
{
    public $table_name = 'products';

    public function up()
    {
        $fields = array(
            'category_id' => array('type' => 'INT','constraint' => 10,'after' => 'price')
        );
        $this->dbforge->add_column($this->table_name, $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column($this->table_name, 'category_id');
    }
}
