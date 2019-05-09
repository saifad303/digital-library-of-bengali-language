<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Books_Management extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $mytype = $this->session->userdata("mytype");
        if ($mytype != 'a')
        {
            redirect(base_url(), "refresh");
        }
    }

    public function index()
    {
        $this->load->helper("form");
        $data['allCat'] = $this->am->view_with_asc("category", "*", "name");
        $data['allTag'] = $this->am->view_with_asc("tags", "*", "name");
        $data['allSCat'] = $this->am->view_with_asc("subcategory", "*", "name");
        $id = $this->session->userdata("myid");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allNtData'] = $this->am->view_notification();
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
        $data['title'] = 'Admin Panel';
        $data['content'] = $this->load->view("admin/add_new", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function insert()
    {

        date_default_timezone_set('asia/dhaka');

        $this->load->helper("form");
        $this->load->library('form_validation');


        $this->form_validation->set_rules('title', 'Title', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == TRUE)
        {

            $ext = pathinfo($_FILES['pic']['name']);
            $ext = strtolower($ext['extension']);
            if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif")
            {
                $ext = "";
            }

            $epubext = pathinfo($_FILES['epub']['name']);
            $epubext = strtolower($epubext['extension']);
            if ($epubext != "epub")
            {
                $epubext = "";
            }

            $mobiext = pathinfo($_FILES['mobi']['name']);
            $mobiext = strtolower($mobiext['extension']);
            if ($mobiext != "mobi")
            {
                $mobiext = "";
            }

            $pdfext = pathinfo($_FILES['pdf']['name']);
            $pdfext = strtolower($pdfext['extension']);
            if ($pdfext != "pdf")
            {
                $pdfext = "";
            }

            $data = array(
                "title" => $this->input->post("title"),
                "author" => $this->input->post("author"),
                "publisher" => $this->input->post("publisher"),
                "publishingdate" => $this->input->post("publishdate"),
                "subcategoryid" => $this->input->post("scatid"),
                "datetime" => date("Y-m-d H:i:s"),
		"epubext" => $epubext,
		"mobiext" => $mobiext,
		"pdfext" => $pdfext,
                "picture" => $ext
            );


            if ($a = $this->am->InsertData("books", $data))
            {

                $Id = $this->am->Id;
                write_file("./description/book_{$Id}.txt", $this->input->post("descr"));

                if ($ext != "")
                {
                    $this->load->library('upload');
                    $config['upload_path'] = './books/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '1000000';
                    $config['max_width'] = '4048';
                    $config['max_height'] = '3500';
                    $config['file_name'] = "book_{$Id}.{$ext}";
                    $this->upload->initialize($config); //upload image data
                    $this->upload->do_upload('pic');
                }

                if ($epubext != "")
                {
                    $this->load->library('upload');
                    $config['upload_path'] = './epub/';
                    $config['allowed_types'] = 'epub';
                    $config['max_size'] = '20000000';
                    $config['file_name'] = "epub_{$Id}.{$epubext}";
                    $this->upload->initialize($config); //upload epub data
                    $this->upload->do_upload('epub');
                }

                if ($mobiext != "")
                {
                    $this->load->library('upload');
                    $config['upload_path'] = './mobi/';
                    $config['allowed_types'] = 'mobi';
                    $config['max_size'] = '20000000';
                    $config['file_name'] = "mobi_{$Id}.{$mobiext}";
                    $this->upload->initialize($config); //upload mobi data
                    $this->upload->do_upload('mobi');
                }

                if ($pdfext != "")
                {
                    $this->load->library('upload');
                    $config['upload_path'] = './pdf/';
                    $config['allowed_types'] = 'pdf';
                    $config['max_size'] = '20000000';
                    $config['file_name'] = "pdf_{$Id}.{$pdfext}";
                    $this->upload->initialize($config); //upload pdf data
                    $this->upload->do_upload('pdf');
                }


                if ($a)
                {
                    $Id = $this->am->Id;
                    //Tags 
                    $tags = $this->input->post("tagid");
                    if ($tags)
                    {
                        foreach ($tags as $t)
                        {
                            $data = array(
                                "bookid" => $Id,
                                "tagsid" => $t
                            );
                            echo '<pre>';
                            print_r($data);
                            echo '</pre>';
                            $this->am->InsertData("book_tags", $data);
                        }
                    }
                }
                else
                {
                    echo "Not saved";
                }
            }

            $msginfo['msg'] = "Upload successfully";

            $this->session->set_userdata($msginfo);
            redirect(base_url() . "books_management/view");
        }
        else
        {
            echo 'Not working';
            $this->load->helper("form");
            $data['title'] = 'Admin Panel';
            $data['allCat'] = $this->am->view_with_asc("category", "*", "name");
            $data['allTag'] = $this->am->view_with_asc("tags", "*", "name");
            $data['allSCat'] = $this->am->view_with_asc("subcategory", "*", "name");
            $data['content'] = $this->load->view("admin/add_new", $data, TRUE);
            $this->load->view("admin/admin_master", $data);
        }
    }

    public function view()
    {
        $data['title'] = 'Admin Panel';
        $id = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id));
        $data['allBook'] = $this->am->view_book("");
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['allNtData'] = $this->am->view_notification();
        $data['content'] = $this->load->view("admin/add_view", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $this->load->helper("form");
        $id1 = $this->session->userdata("myid");
        $data['allData'] = $this->am->view_data("user", "*", array("id" => $id1));
        $data['selBook'] = $this->am->view_data("books", "*", array("id" => $id));
        $data['allNtData'] = $this->am->view_notification();
        $data['allp4m'] = $this->am->view_with_asc("pay4mem", "*", "id");
        $data['allUser'] = $this->am->view_with_asc("user", "*", "name");
        $data['selTag'] = $this->am->view_data("book_tags", "*", array("bookid" => $id));
        $data['allTag'] = $this->am->view_with_asc("tags", "*", "name");
        $data['allCat'] = $this->am->view_with_asc("category", "*", "name");
        $data['allSCat'] = $this->am->view_with_asc("subcategory", "*", "name");
        $data['title'] = "Books Management";
        $data['content'] = $this->load->view("admin/book_edit", $data, TRUE);
        $this->load->view("admin/admin_master", $data);
    }

    public function update()
    {
        date_default_timezone_set('asia/dhaka');
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|trim|min_length[2]');




        if ($this->form_validation->run() == TRUE)
        {
            $id = $this->input->post("id");
            $r = $this->am->view_data("books", "picture", array("id" => $id));
            foreach ($r as $p)
            {
                $old_ext = $p->picture;
            }


            if ($_FILES['pic']['name'] != "")
            {
                $ext = pathinfo($_FILES['pic']['name']);
                $ext = strtolower($ext['extension']);
                if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif")
                {
                    $ext = $old_ext;
                }
                else
                {
                    if ($old_ext != "")
                    {
                        if (file_exists("books/book_{$id}.{$old_ext}"))
                        {
                            unlink("books/book_{$id}.{$old_ext}");
                        }
                        $this->load->library('upload');
                        $config['upload_path'] = './books/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = '1000';
                        $config['max_width'] = '2048';
                        $config['max_height'] = '1500';
                        $config['file_name'] = "book_{$id}.{$ext}";
                        $this->upload->initialize($config); //upload image data
                        $this->upload->do_upload('pic');
                    }
                }
            }
            else
            {
                $ext = $old_ext;
            }
            $data = array(
                "title" => $this->input->post("title"),
                "author" => $this->input->post("author"),
                "publisher" => $this->input->post("publisher"),
                "publishingdate" => $this->input->post("publishdate"),
                "subcategoryid" => $this->input->post("scatid"),
                "datetime" => date("Y-m-d H:i:s"),
                "picture" => $ext
            );

            if ($this->am->UpdateData("books", $data, array("id" => $id)))
            {
                write_file("./description/book_{$id}.txt", $this->input->post("descr"));

                //Tags
                $this->am->DeleteData("book_tags", array("bookid" => $id));
                $tags = $this->input->post("tagsid");
                if ($tags)
                {
                    foreach ($tags as $t)
                    {
                        $data = array(
                            "bookid" => $id,
                            "tagsid" => $t
                        );
                        $this->am->InsertData("book_tags", $data);
                    }
                }


                $ses_data['msg'] = "Update Success";
            }
            else
            {
                $ses_data['msg'] = "Some Error Occurs";
            }
            $this->session->set_userdata($ses_data);
            redirect(base_url() . "books_management/view", "refresh");
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->am->DeleteData("book_tags", array("bookid" => $id));
        $r = $this->am->view_data("books", "picture", array("id" => $id));
        foreach ($r as $p)
        {
            $old_ext = $p->picture;
        }
        if (file_exists("books/book_{$id}.{$old_ext}"))
        {
            unlink("books/book_{$id}.{$old_ext}");
        }
        if (file_exists("description/book_{$id}.txt"))
        {
            unlink("description/book_{$id}.txt");
        }
        if ($this->am->DeleteData("books", array("id" => $id)))
        {
            $ses_data['msg'] = "Delete Success";
        }
        else
        {
            $ses_data['msg'] = "Some Error Occurs";
        }
        $this->session->set_userdata($ses_data);
        redirect(base_url() . "books_management/view", "refresh");
    }

}
