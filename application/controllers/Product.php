<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $data['content'] = 'products/v_index';
        $this->load->view('layout', $data);
    }
}
