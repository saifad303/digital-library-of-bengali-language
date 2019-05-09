<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tag_Management extends CI_Controller
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
        $data['title'] = 'Category control panel';
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['content'] = $this->load->view("admin/tag_new", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function view()
    {
        $data['title'] = 'Tags view';
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allTag'] = $this->am->view_with_asc("tags", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['content'] = $this->load->view("admin/tag_view", $data, TRUE);
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
                "name" => $this->input->post("btag")
            );

            if($this->am->InsertData("tags", $data))
            {
                echo "Saved";
            }
            else
            {
                echo "Not Saved";
            }
        }
        else
        {

            $data['title'] = "Category Management";
            $data['content'] = $this->load->view("admin/tag_new", $data, TRUE);
            $this->load->view("admin/admin_master", $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $this->load->helper("form");
        $data['title'] = "Tag edit";
        $data['allNtData'] = $this->am->view_notification();
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $id1 = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id1));
        $data['selTag'] = $this->am->view_data("tags", "*", array("id" => $id));
        $data['content'] = $this->load->view("admin/tag_edit", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function update()
    {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tags', 'Tags', 'required' | 'trim');


        if($this->form_validation->run() == TRUE)
        {
            $id = $this->input->post("id");
            $data = array(
                "name" => $this->input->post("btag")
            );

            if($this->am->UpdateData("tags", $data, array("id" => $id)))
            {


                $ses_data['msg'] = "Update Success";
            }
            else
            {
                $ses_data['msg'] = "Some Error Occurs";
            }
            $this->session->set_userdata($ses_data);
            redirect(base_url() . "tag_management/view", "refresh");
        }
    }

}
