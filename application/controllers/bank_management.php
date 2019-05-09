<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_Management extends CI_Controller
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
        $data['title'] = 'Payment method';
        $id = $this->session->userdata("myid");
        $data['allNtData'] = $this->am->view_notification();
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['content'] = $this->load->view("admin/bank_new", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function insert()
    {
        $this->load->helper("form");
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ubank', 'Bank Name', 'required|trim|min_length[2]');


        if($this->form_validation->run() == TRUE)
        {
            $data = array(
                "bank_name" => $this->input->post("ubank")
            );

            if($this->am->InsertData("paymentmethod", $data))
            {
                echo "bank Saved";
            }
            else
            {
                echo "Bank Not Saved";
            }
        }
        else
        {

            $data['title'] = "Bank Management";
            $data['content'] = $this->load->view("admin/bank_new", $data, TRUE);
            $this->load->view("admin/admin_master", $data);
        }
    }

    public function view()
    {
        $data['title'] = 'Bank view';
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id));
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allBank'] = $this->am->view_with_asc("paymentmethod", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['content'] = $this->load->view("admin/bank_view", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $this->load->helper("form");
        $data['title'] = "Bank name edit";
        $id1 = $this->session->userdata("myid");
        $data['allNtData'] = $this->am->view_notification();
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allData'] = $this->am->view_data("user", "*", array("id"=>$id1));
        $data['selTag'] = $this->am->view_data("paymentmethod", "*", array("id" => $id));
        $data['content'] = $this->load->view("admin/bank_edit", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function update()
    {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('ubank', 'Bank', 'required|trim|min_length[2]');


        if($this->form_validation->run() == TRUE)
        {
            $id = $this->input->post("id");
            $data = array(
                "bank_name" => $this->input->post("ubank")
            );

            if($this->am->UpdateData("paymentmethod", $data, array("id" => $id)))
            {


                $ses_data['msg'] = "Update Success";
            }
            else
            {
                $ses_data['msg'] = "Some Error Occurs";
            }
            $this->session->set_userdata($ses_data);
            redirect(base_url() . "bank_management/view", "refresh");
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->am->DeleteData("paymentmethod", array("id" => $id));

        if($this->am->DeleteData("books", array("id" => $id)))
        {
            $ses_data['msg'] = "Delete Success";
        }
        else
        {
            $ses_data['msg'] = "Some Error Occurs";
        }
        $this->session->set_userdata($ses_data);
        redirect(base_url() . "bank_management/view", "refresh");
    }

}
