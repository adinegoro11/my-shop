<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['content'] = 'v_about';
        $this->load->view('layout', $data);
    }
}
