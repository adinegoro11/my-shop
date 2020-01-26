<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['content'] = 'v_contact';
        $this->load->view('layout', $data);
    }
}
