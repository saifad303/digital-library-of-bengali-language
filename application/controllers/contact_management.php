<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_management extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Deshboard';
        
        $data['allContact'] = $this->am->view_with_asc("contact", "*", "id");
        $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }
    
    public function insert(){
        
        date_default_timezone_set('asia/dhaka');
        $this->load->helper("form");
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        
         if($this->form_validation->run() == TRUE)
        {

            $data = array(
                "name" => $this->input->post("name"),
                "email" => $this->input->post("email"),
                "subject" => $this->input->post("subject"),
                "time" => date("H:i a")
                
            );


            if($this->am->InsertData("contact", $data))
            {

                $Id = $this->am->Id;
                write_file("./message/message_{$Id}.txt", $this->input->post("message"));
                    echo 'ha ha ha Save hoice';
            }
            else{
                echo 'Not save';
            }
         
    }
     else
        {
            echo 'Not working';
            $this->load->helper("form");
            $data['title'] = 'Contact';
            $data['content'] = $this->load->view("contact", $data, TRUE);
            $this->load->view("master", $data);
        }
    
    }
     
    public function delete_message()
    {
        $id = $this->uri->segment(3);

        $del = $this->am->DeleteData("contact", array("id" => $id));

        redirect(base_url() . "ebook/admin", "refresh");
    }
}