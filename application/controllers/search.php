<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{

    public function index()
    {
        $title = "";


        if (isset($_GET['title']) && $_GET['title'] != "")
        {
            $title = $_GET['title'];
        }

        $data['title'] = "DLOBL";
        $id = $this->session->userdata("myid");
        $countryid = $this->session->userdata("mycountryid");
        $data['searchpdt'] = $this->am->search_books($title);
        $data1['searchauth'] = $this->am->search_author($title);
        $data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['per_page'] = 9;
	if (isset($_GET['page']))
	{
	    $data['start'] = $_GET['page'];
	}
	else
	{
	    $data['start'] = 1;
	}
	$data['homeData'] = $this->am->home_page(( $data['start'] - 1) * $data['per_page'], 9);
        //$data['homeData'] = $this->am->home_page();
        $data['content'] = $this->load->view("search_page", $data, TRUE);
        $data['content'] = $this->load->view("search_page", $data1, TRUE);
        $this->load->view("master", $data);
    }

    public function search_b()
    {

        $title = "";


        if (isset($_GET['searchbks']) && $_GET['searchbks'] != "")
        {
            $title = $_GET['searchbks'];
        }

        $data['title'] = "DLOBL";
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
        $data['searchpdt'] = $this->am->search_books($title);
        $data1['searchauth'] = $this->am->search_author($title);
        $data['allNtData'] = $this->am->view_notification();
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['content'] = $this->load->view("admin/admin_searchpg", $data, TRUE);
        $data['content'] = $this->load->view("admin/admin_searchpg", $data1, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function search_user()
    {
        $title = "";


        if (isset($_GET['serchu']) && $_GET['serchu'] != "")
        {
            $title = $_GET['serchu'];
        }

        $data['title'] = "DLOBL";
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
        $data['searchu'] = $this->am->search_user($title);
        $data1['searcnt'] = $this->am->search_country($title);
        $data2['searchem'] = $this->am->search_email($title);
        $data['allCountry'] = $this->am->view_with_asc("country", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['content'] = $this->load->view("admin/user_search", $data, TRUE);
        $data['content'] = $this->load->view("admin/user_search", $data1, TRUE);
        $data['content'] = $this->load->view("admin/user_search", $data2, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

}
