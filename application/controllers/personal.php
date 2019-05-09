<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Admin Panel';
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
        $data['allUser'] = $this->am->view_with_asc("user", "*", "activation");
        $data['allCountry'] = $this->am->view_with_asc("country", "*", "name");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['content'] = $this->load->view("admin/userprofile", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

}

