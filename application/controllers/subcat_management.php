<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class subcat_Management extends CI_Controller
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
        $data['allSCat'] = $this->am->view_with_asc("subcategory", "*", "name");
        $data['allCat'] = $this->am->view_with_asc("category", "*", "name");
        $data['title'] = 'Category control panel';
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['content'] = $this->load->view("admin/subcategory_new", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function view()
    {
        $data['title'] = 'Category control panel';
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allSCat'] = $this->am->view_subcategory();
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allNtData'] = $this->am->view_notification();
        $data['content'] = $this->load->view("admin/subcategory_view", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function insert()
    {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('subcategory', 'Subcategory', 'required|trim|min_length[2]');

        if($this->form_validation->run() == TRUE)
        {
            $data = array(
                "name" => $this->input->post("subcategory"),
                "categoryid" => $this->input->post("catid")
            );

            if($this->am->InsertData("subcategory", $data))
            {
                echo "Saved";
            }
            else
            {
                echo "Not saved";
            }
        }
        else
        {
            $data['allSCat'] = $this->am->view_with_asc("subcategory", "*", "name");
            $data['allCat'] = $this->am->view_with_asc("category", "*", "name");
            $data['title'] = "SubCategory Management";
            $data['content'] = $this->load->view("admin/subcategory_new", $data, TRUE);
            $this->load->view("admin/admin_master", $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $this->load->helper("form");
        $data['selScat'] = $this->am->view_data("subcategory", "*", array("id" => $id));
        $data['allCat'] = $this->am->view_with_asc("category", "*", "name");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['title'] = "Subcategory Management";
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $id1 = $this->session->userdata("myid");
        $data['allNtData'] = $this->am->view_notification();
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id1));
        $data['content'] = $this->load->view("admin/subcategory_edit", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function update()
    {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('subcategory', 'Subcategory', 'required' | 'trim');


        if($this->form_validation->run() == TRUE)
        {
            $id = $this->input->post("id");
            $data = array(
                "name" => $this->input->post("bsubcategory")
            );

            if($this->am->UpdateData("subcategory", $data, array("id" => $id)))
            {


                $ses_data['msg'] = "Update Success";
            }
            else
            {
                $ses_data['msg'] = "Some Error Occurs";
            }
            $this->session->set_userdata($ses_data);
            redirect(base_url() . "subcat_management/view", "refresh");
        }
    }

}
