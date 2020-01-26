<?php

class Category_model extends CI_Model
{
    public $table_name ='categories';

    public function get_all()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
}
