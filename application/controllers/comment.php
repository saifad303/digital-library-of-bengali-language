<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller
{

    public function index()
    {
	
    }

    public function comment_post()
    {
	date_default_timezone_set('asia/dhaka');
	header('Content-Type: application/json');
	$com = $this->input->post("pcomment");
	$uname = $this->input->post("uname");
	$userid = $this->input->post("uid");
	$bid = $this->input->post("bid");
	$date = date("Y:m:d H:i:s");


	$data = array(
	    "userid" => $userid,
	    "booksid" => $bid,
	    "description" => $com,
	    "datetime" => $date
	);


	$insert = $this->am->InsertData("comment", $data);

	if ($insert)
	{
	    echo 1;
	}
    }

    public function rating()
    {
	header('Content-Type: application/json');
	$data['rating'] = $this->am->view_with_desc("rating", "*", "id");
	$uid = $this->input->post("uid");
	$bid = $this->input->post("bid");
	$rate = $this->input->post("num");
	$flag = 0;

	foreach ($data['rating'] as $rr)
	{
	    $ud[] = $rr->userid;
	    $bk[] = $rr->bookid;
	}

	for ($i = 0; $i < sizeof($ud); $i++)
	{
	    if ($ud[$i] == $uid && $bk[$i] == $bid)
	    {
		$flag = 1;
	    }
	}

	if ($flag == 1)
	{
	    return false;
	}
	else
	{
	    $data = array(
		"rating_point" => $rate,
		"bookid" => $bid,
		"userid" => $uid,
		"person" => 1
	    );

	    $this->am->InsertData("rating", $data);
	}
    }

    public function comment_delete()
    {
	$cid = $this->input->post("cid");

	if ($cid != "")
	{
	    $this->am->DeleteData("comment", array("id" => $cid));
	    echo 'Comment delete successfully';
	}
    }

}
