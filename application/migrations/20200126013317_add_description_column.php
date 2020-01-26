<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_description_column extends CI_Migration
{
    public $table_name = 'products';

    public function up()
    {
        $fields = array(
            'description' => array('type' => 'TEXT','after' => 'category_id')
        );
        $this->dbforge->add_column($this->table_name, $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column($this->table_name, 'description');
    }
}
