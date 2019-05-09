<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
	
    }

    public function insert()
    {
	date_default_timezone_set('asia/dhaka');
	$this->load->helper("form");
	$this->load->library('form_validation');
        
	$this->form_validation->set_rules('cntid', 'Country', 'required');

	$month = $this->input->post("membership");
	$taka = $month * 30;
	if ($month == 12)
	{
	    $month = 365;
	}
	else if ($month == 24)
	{
	    $month = 730;
	}
	else
	{
	    $month = 180;
	}


	if ($this->form_validation->run() == TRUE)
	{
	    $ext = pathinfo($_FILES['pic']['name']);
	    $ext = strtolower($ext['extension']);
	    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif")
	    {
		$ext = "";
	    }

	    //$str = RandString(10);
	    $data = array(
		"name" => $this->input->post("uname"),
		"email" => $this->input->post("email"),
		"password" => $this->input->post("pass"),
		"countryid" => $this->input->post("cntid"),
		"picture" => $ext,
		"status" => "dufhkdhkjd",
		"type" => 'u',
		"datetime" => date("Y-m-d H:i:s"),
		"picture" => $ext
	    );

	    if ($a = $this->am->InsertData("user", $data))
	    {
		$Id = $this->am->Id;

		if ($ext != "")
		{
		    $this->load->library('upload');
		    $config['upload_path'] = './uesrpic/';
		    $config['allowed_types'] = 'gif|jpg|png|jpeg';
		    $config['max_size'] = '100000000000';
		    $config['max_width'] = '8048';
		    $config['max_height'] = '5500';
		    $config['file_name'] = "upic_{$Id}.{$ext}";
		    $this->upload->initialize($config); //upload image data
		    $this->upload->do_upload('pic');
		}
		
		
		if ($a)
		{
		    $Id = $this->am->Id;

		    //to pay4mem


		    $bank_id = $this->input->post("payid");
		    $transfer_id = $this->input->post("transfer");
		    $mem_duration = $this->input->post("membership");

		    if ($bank_id && $transfer_id && $mem_duration)
		    {
			for ($i = 0; $i < 1; $i++)
			{
			    $data = array(
				"userid" => $Id,
				"duration" => $month,
				"bankid" => $bank_id,
				"transferid" => $transfer_id,
				"taka" => $taka,
				"paymentdate" => date("Y-m-d H:i:s")
			    );
			    echo '<pre>';
			    print_r($data);
			    echo '</pre>';
			    $this->am->InsertData("pay4mem", $data);
			}
		    }
		}
		else
		{
		    echo 'Not Saved';
		}

		echo 'Info Saved';

		$msg = "For activate your account, <a href='" . base_url() . "user/verify/dufhkdhkjd" . "'>Click Here</a>";
		mail($this->input->post("email"), "Email Verification", $msg);
		echo $msg;
	    }
	}
      
    }

    public function enable()
    {
	$id = $this->uri->segment(3);
	$data = array(
	    "activation" => 1
	);
	if ($id != "")
	{
	    $this->am->UpdateData("user", $data, array("id" => $id));
	}
	redirect(base_url() . "personal", "refresh");
    }

    public function disable()
    {
	$id = $this->uri->segment(3);
	$data = array(
	    "activation" => 0
	);
	if ($id != "")
	{
	    $this->am->UpdateData("user", $data, array("id" => $id));
	}
	redirect(base_url() . "personal", "refresh");
    }

    public function verify()
    {
	$st = $this->uri->segment(3);
	if ($st != "")
	{
	    $dt = $this->am->view_data("user", "id, type", array("status" => $st));
	    if ($dt)
	    {
		foreach ($dt as $d)
		{
		    $data['myid'] = $d->id;
		    $data['mytype'] = $d->type;
		    $this->session->set_userdata($data);
		    $this->am->UpdateData("user", array("status" => ""), array("id" => $d->id));
		    redirect(base_url(), "refresh");
		}
	    }
	    else
	    {
		echo "Invalid Code";
	    }
	}
	else
	{
	    echo "Hoi nai";
	}
    }

    public function activation()
    {
	$id = $this->uri->segment(3);

	$data = array(
	    "id" => $id
	);

	$user = $this->am->view_data("user", "*", $data);

	if ($user)
	{
	    $data = array(
		"activation" => 1
	    );
	    $this->am->UpdateData("user", $data, array("id" => $id));

	    $data = array(
		"activation" => 1
	    );
	    $this->am->UpdateData("pay4mem", $data, array("userid" => $id));
	}
	redirect(base_url() . "profile/notification", "refresh");
    }

    public function delete_notification()
    {
	$id = $this->uri->segment(3);

	$del = $this->am->DeleteData("pay4mem", array("id" => $id));

	redirect(base_url() . "profile/notification", "refresh");
    }

    public function changproepic()
    {
	$id = $this->session->userdata("myid");
	$r = $this->am->view_data("user", "picture", array("id" => $id));
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
		    if (file_exists("uesrpic/upic_{$id}.{$old_ext}"))
		    {
			unlink("uesrpic/upic_{$id}.{$old_ext}");
		    }
		    $this->load->library('upload');
		    $config['upload_path'] = './uesrpic/';
		    $config['allowed_types'] = 'gif|jpg|png|jpeg';
		    $config['max_size'] = '10000000000';
		    $config['max_width'] = '7048';
		    $config['max_height'] = '5500';
		    $config['file_name'] = "upic_{$id}.{$ext}";
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
	    "picture" => $ext
	);
	if ($this->am->UpdateData("user", $data, array("id" => $id)))
	{
	    redirect(base_url(), "refresh");
	}
    }
    
  
    public function check()
    {
	$data = array(
	    "email" => $this->input->post("email"),
	    "password" => $this->input->post("pass")
	);
	$dt = $this->am->view_data("user", "id,type,countryid,status", $data);

	if ($dt)
	{
	    foreach ($dt as $d)
	    {
		
		    if ($d->status == "")
		    {
			$data['myid'] = $d->id;
			$data['mytype'] = $d->type;
			$data['mycountryid'] = $d->countryid;
			//$data['last_time'] = time();
			$this->session->set_userdata($data);
			redirect(base_url(), "refresh");
		}
		else
		{
		    echo 'Some one else using ur accout';
		}
	    }
	}
	else
	{
	    $uinc['msg'] = "Incorrect email or password";
	    $this->session->set_userdata($uinc);
	    redirect(base_url() . "ebook/login");
	}
    }

    public function logout()
    {
	$id = $this->session->userdata("myid");
	$this->session->unset_userdata("myid");
	$this->session->unset_userdata("mytype");
	redirect(base_url(), "refresh");
    }

    public function v_password()
    {
	$this->load->helper("form");
	$data['title'] = 'Forget password';
	$data['content'] = $this->load->view("f_password", $data, TRUE);
	$this->load->view("master", $data);
    }

    public function f_pass()
    {
	$data['allUser'] = $this->am->view_with_asc("user", "*", "name");
	$flag = 0;

	$email = $this->input->post("email");

	foreach ($data['allUser'] as $v_p)
	{
	    $ckem[] = $v_p->email;
	}

	for ($i = 0; $i < sizeof($ckem); $i++)
	{
	    if ($ckem[$i] == $email)
	    {
		$flag = 1;
	    }
	}

	if ($flag == 1)
	{

	    $data['vd'] = $this->am->view_data("user", "*", array("email" => $email));

	    foreach ($data['vd'] as $p)
	    {
		$pass = $p->password;
	    }

	    $msg = 'Hello this is from DLOB.Your new password is down below.<br><br> password = ' . $pass;
	    $from = '<b>DLOBL</b>';
	    mail($email, "<b>DLOBL user Reset Password</b>", $msg, $from);
	    $c_msg['c_msg'] = 'An email has been sent with your password to yor email address.';

	    $this->session->set_userdata($c_msg);
	    redirect(base_url() . "user/v_password");
	}
	else
	{
	    $msg['msg'] = 'Emal not existing';
	    $this->session->set_userdata($msg);
	    redirect(base_url() . "user/v_password");
	}
    }

}
