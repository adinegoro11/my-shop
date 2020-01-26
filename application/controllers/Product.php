<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function index()
    {
        $data['content'] = 'products/v_index';
        $this->load->view('layout', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('name', 'Product name', 'required|min_length[3]|is_unique[products.name]');
        $this->form_validation->set_rules('price', 'Price', 'required|integer|greater_than_equal_to[100]');
        $this->form_validation->set_rules('category_id', 'Category', 'required|integer');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[3]');

        if ($this->form_validation->run() == false) {
            $data['content'] = 'products/v_add';
            $data['categories'] = $this->category_model->get_all();
            $this->load->view('layout', $data);
        } else {
            $post = $this->input->post();
            $post['active'] = 1;
            $post['last_update'] = date('Y-m-d H:i:s');
            $this->product_model->insert($post);
            redirect('/product/list');
        }
    }

    public function list()
    {   
        $data['query'] = $this->product_model->get_all();
        $data['content'] = 'products/v_list';
        $this->load->view('layout', $data);
    }
}
