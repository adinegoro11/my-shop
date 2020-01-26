<?php

class Product_model extends CI_Model
{
    public $table_name ='products';

    public function insert($data)
    {
        $query = $this->db->insert($this->table_name, $data);
        return $query;
    }

    public function get_all()
    {
        $this->db->select('products.name AS name,categories.name AS category,price,products.active,products.last_update AS last_update');
        $this->db->from($this->table_name);
        $this->db->join('categories', 'categories.id = products.category_id');
        $query = $this->db->get();
        return $query->result();
    }
}
