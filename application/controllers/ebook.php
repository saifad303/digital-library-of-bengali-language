<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller
{

    public function index()
    {
	$this->load->helper("form");
	$data['title'] = 'DLOBL';
	$id = $this->session->userdata("myid");
	$countryid = $this->session->userdata("mycountryid");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
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

	$data['content'] = $this->load->view("home", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function admin()
    {
	$mytype = $this->session->userdata("mytype");
	if ($mytype != 'a')
	{
	    redirect(base_url(), "refresh");
	}
	$data['title'] = 'Admin Panel';
	$id = $this->session->userdata("myid");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['allUser'] = $this->am->view_with_asc("user", "*", "name");
	$data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
	$data['allNtData'] = $this->am->view_notification();
	$data['allContact'] = $this->am->view_with_asc("contact", "*", "id");
	$data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
	$this->load->view("admin/admin_master", $data);
    }

    public function ragistration()
    {
	$this->load->helper("form");
	$data['title'] = 'User ragistration';
	$data['allCountry'] = $this->am->view_with_asc("country", "*", "id");
	$data['allBank'] = $this->am->view_with_asc("paymentmethod", "*", "id");
	$data['months'] = $this->am->view_with_asc("duration", "*", "id");
	$data['content'] = $this->load->view("ragistration", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function login()
    {
	$data['title'] = 'User login';
	$data['content'] = $this->load->view("login", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function change_pass()
    {
	$data['title'] = 'Password Change';
	$data['allData'] = $this->am->view_data("user", "*", "id");
	$data['content'] = $this->load->view("change_pass", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function contact()
    {
	$data['title'] = 'Contact us';
	$data['allData'] = $this->am->view_data("user", "*", "id");
	$data['content'] = $this->load->view("contact", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function book_details()
    {
	$data['title'] = 'Book Details';
	$data['per_page'] = 12;
	if (isset($_GET['page']))
	{
	    $data['start'] = $_GET['page'];
	}
	else
	{
	    $data['start'] = 1;
	}
	$data['browseData'] = $this->am->browse_page(( $data['start'] - 1) * $data['per_page'], 12);
	$id = $this->session->userdata("myid");
	$urid = $this->uri->segment(3);
	$data['bookdt'] = $this->am->book_details($urid);
	$countryid = $this->session->userdata("mycountryid");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['allUser'] = $this->am->view_with_asc("user", "*", "name");
	$data['allComment'] = $this->am->view_with_desc("comment", "*", "id");
	$data['allBook'] = $this->am->view_with_desc("books", "*", "id");
	$data['allCountry'] = $this->am->view_with_desc("country", "*", "id");
	$data['rating'] = $this->am->view_with_desc("rating", "*", "id");
	$data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
	$data['content'] = $this->load->view("book_details", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function browse()
    {
	$data['title'] = 'Books Browse';
	$data['per_page'] = 12;
	if (isset($_GET['page']))
	{
	    $data['start'] = $_GET['page'];
	}
	else
	{
	    $data['start'] = 1;
	}
	$data['browseData'] = $this->am->browse_page(( $data['start'] - 1) * $data['per_page'], 12);
	$id = $this->session->userdata("myid");
	$countryid = $this->session->userdata("mycountryid");
	$data['allCategory'] = $this->am->view_with_asc("category", "*", "id");
	$data['allSubCategory'] = $this->am->view_with_asc("subcategory", "*", "id");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
	$data['content'] = $this->load->view("browse", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function subcat_details()
    {
	$subId = $this->uri->segment(3);
	$data['books'] = $this->am->view_data("books", "*", array("subcategoryid" => $subId));
        $data['allData'] = $this->am->view_data("user", "*", TRUE);
	$data['title'] = 'Subcategory';
	$data['content'] = $this->load->view("subcat_details", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function quiz()
    {
	$data['title'] = 'Monthly quiz';
	$id = $this->session->userdata("myid");
	$countryid = $this->session->userdata("mycountryid");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
	$data['content'] = $this->load->view("monthly_quize", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function faq()
    {
	$data['title'] = 'Monthly quiz';
	$id = $this->session->userdata("myid");
	$countryid = $this->session->userdata("mycountryid");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
	$data['content'] = $this->load->view("faq", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function blog()
    {
	$data['title'] = 'Monthly quiz';
	$id = $this->session->userdata("myid");
	$countryid = $this->session->userdata("mycountryid");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
	$data['content'] = $this->load->view("blog", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function signup_help()
    {
	$data['title'] = 'Monthly quiz';
	$id = $this->session->userdata("myid");
	$countryid = $this->session->userdata("mycountryid");
	$data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
	$data['Ucountry'] = $this->am->view_data("country", "*", array("id" => $countryid));
	$data['content'] = $this->load->view("signup_help", $data, TRUE);
	$this->load->view("master", $data);
    }

}
