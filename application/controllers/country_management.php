<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Country_Management extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $mytype = $this->session->userdata("mytype");
        if($mytype != 'a')
        {
            redirect(base_url(), "refresh");
        }
    }

    public function index()
    {
        $this->load->helper("form");
        $data['title'] = 'Country Management';
        $id = $this->session->userdata("myid");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allNtData'] = $this->am->view_notification();
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['content'] = $this->load->view("admin/country_new", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function insert()
    {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('ucountry', 'Country', 'required|trim|min_length[2]');


        if($this->form_validation->run() == TRUE)
        {
            $data = array(
                "name" => $this->input->post("ucountry")
            );

            if($this->am->InsertData("country", $data))
            {
                echo "country Saved";
            }
            else
            {
                echo "country Not Saved";
            }
        }
        else
        {

            $data['title'] = "Country Management";
            $data['content'] = $this->load->view("admin/country_new", $data, TRUE);
            $this->load->view("admin/admin_master", $data);
        }
    }

    public function view()
    {
        $data['title'] = 'Country view';
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allCountry'] = $this->am->view_with_asc("country", "*", "id");
        $data['content'] = $this->load->view("admin/country_view", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $this->load->helper("form");
        $data['title'] = "Country edit";
        $id1 = $this->session->userdata("myid");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id1));
        $data['selCat'] = $this->am->view_data("country", "*", array("id" => $id));
        $data['content'] = $this->load->view("admin/country_edit", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function update()
    {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('ecountry', 'Country', 'required|trim|min_length[2]');


        if($this->form_validation->run() == TRUE)
        {
            $id = $this->input->post("id");
            $data = array(
                "name" => $this->input->post("ecountry")
            );

            if($this->am->UpdateData("country", $data, array("id" => $id)))
            {


                $ses_data['msg'] = "Update Success";
            }
            else
            {
                $ses_data['msg'] = "Some Error Occurs";
            }
            $this->session->set_userdata($ses_data);
            redirect(base_url() . "country_management/view", "refresh");
        }
    }

}
