<?php

class Product_model extends CI_Model
{
    public $table_name ='products';

    public function insert($data)
    {
        $query = $this->db->insert($this->table_name, $data);
        return $query;
    }

    public function get_all($array = null)
    {
        $this->db->select('products.id AS id,products.name AS name,categories.name AS category,price,products.active,products.last_update AS last_update,description');
        $this->db->from($this->table_name);
        $this->db->join('categories', 'categories.id = products.category_id');
        if (isset($array)) {
            $this->db->where($array);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function get_where($where)
    {
        $query = $this->db->get_where($this->table_name, $where, null, null);
        return $query->result();
    }
}
