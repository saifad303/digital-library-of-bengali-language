<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        
    }

    public function notification()
    {
        $data['title'] = 'User notification';
        $id = $this->session->userdata("myid");
        $countryid = $this->session->userdata("mycountryid");
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
        $data['allUser'] = $this->am->view_with_asc("user", "*", "activation");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['content'] = $this->load->view("admin/notification_view", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

}
