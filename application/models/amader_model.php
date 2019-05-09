<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Amader_Model extends CI_Model
{
    private $am;
    public $Id;

    public function home_page($start, $per_page)
    {
	return $this->GetMultipleQueryResult("CALL home_page($start, $per_page)");
    }

    public function book_details($id)
    {
        return $this->GetMultipleQueryResult("CALL book_details($id)");
    }
    
     public function browse_page($start, $per_page) {
        return $this->GetMultipleQueryResult("CALL browse_page($start, $per_page)");
    }

    public function InsertData($table, $data)
    {
        if ($this->db->insert($table, $data))
        {
            $this->Id = $this->db->insert_id();
            return true;
        }
        else
        {
            return false;
        }
    }

    public function view_subcategory()
    {
        $this->db->select("sca.id, sca.name, cg.name cgname");
        $this->db->from("subcategory sca");
        $this->db->join("category cg", "cg.id=sca.categoryid");
        $this->db->order_by("sca.id", "desc");
        $this->db->group_by("sca.id");
        return $this->db->get()->result();
    }

    public function view_book($where)
    {
        if ($where)
        {
            $this->db->where($where);
        }
        $this->db->select("b.id, b.title, b.author, b.publisher, b.publishingdate, b.picture, b.datetime, sc.name scname, c.name cname");
        $this->db->from("books b");
        $this->db->join("subcategory sc", "sc.id = b.subcategoryid");
        $this->db->join("category c", "c.id = sc.categoryid");
        $this->db->order_by("b.id", "desc");
        $this->db->group_by("b.id");
        return $this->db->get()->result();
    }

    public function view_notification()
    {
        $this->db->select("p.id, p.transferid, p.taka, p.paymentdate, p.userid, p.bankid,p.duration,u.id uid, u.name uname,u.picture upic,u.email uemail,cnt.name cntname, pm.bank_name pmname");
        $this->db->from("pay4mem p");
        $this->db->join("user u", "u.id = p.userid");
        $this->db->join("paymentmethod pm", "pm.id = p.bankid");
        $this->db->join("country cnt", "cnt.id = u.countryid");
        $this->db->order_by("p.id", "desc");
        $this->db->group_by("p.id");
        return $this->db->get()->result();
    }

    public function search_books($title)
    {
        $this->db->select("b.id, b.title, b.author, b.publisher, b.publishingdate, b.picture, b.datetime, sc.name scname, c.name cname");
        $this->db->from("books b");
        $this->db->join("subcategory sc", "sc.id = b.subcategoryid");
        $this->db->join("category c", "c.id = sc.categoryid");
        $this->db->order_by("b.id", "desc");
        if ($title != "")
        {
            $this->db->like("b.title", $title);
        }

        $this->db->group_by("b.id");
        return $this->db->get()->result();
    }
    
    public function search_user($title)
    {
        $this->db->select("u.id, u.name, u.email,u.type,u.picture, u.activation,u.datetime,u.countryid, cnt.name cntname");
        $this->db->from("user u");
        $this->db->join("country cnt", "cnt.id = u.countryid");
        $this->db->order_by("u.id", "desc");
        if ($title != "")
        {
            $this->db->like("u.name", $title);
        }

        $this->db->group_by("u.id");
        return $this->db->get()->result();
    }
    
    public function search_email($title)
    {
        $this->db->select("u.id, u.name, u.email,u.type,u.picture, u.activation,u.datetime,u.countryid, cnt.name cntname");
        $this->db->from("user u");
        $this->db->join("country cnt", "cnt.id = u.countryid");
        $this->db->order_by("u.id", "desc");
        if ($title != "")
        {
            $this->db->like("u.email", $title);
        }

        $this->db->group_by("u.id");
        return $this->db->get()->result();
    }
    
    public function search_country($title)
    {
        $this->db->select("cnt.id,cnt.name,u.id uid,u.name uname,u.email uemail,u.countryid ucntid,u.type utype,u.activation uactive,u.datetime udate,u.picture upic");
        $this->db->from("country cnt");
        $this->db->join("user u", "u.countryid = cnt.id");
        $this->db->order_by("u.id", "desc");
        if ($title != "")
        {
            $this->db->like("cnt.name", $title);
        }

        $this->db->group_by("cnt.id");
        return $this->db->get()->result();
    }
    
    

    public function search_author($title)
    {
        $this->db->select("b.id, b.title, b.author, b.publisher, b.publishingdate, b.picture, b.datetime, sc.name scname, c.name cname");
        $this->db->from("books b");
        $this->db->join("subcategory sc", "sc.id = b.subcategoryid");
        $this->db->join("category c", "c.id = sc.categoryid");
        $this->db->order_by("b.id", "desc");
        if ($title != "")
        {
            $this->db->like("b.author", $title);
        }

        $this->db->group_by("b.id");
        return $this->db->get()->result();
    }

    public function search_publisher($title)
    {
        $this->db->select("b.id, b.title, b.author, b.publisher, b.publishingdate, b.picture, b.datetime, sc.name scname, c.name cname");
        $this->db->from("books b");
        $this->db->join("subcategory sc", "sc.id = b.subcategoryid");
        $this->db->join("category c", "c.id = sc.categoryid");
        $this->db->order_by("b.id", "desc");
        if ($title != "")
        {
            $this->db->like("b.publisher", $title);
        }

        $this->db->group_by("b.id");
        return $this->db->get()->result();
    }

    public function DeleteData($table, $where)
    {
        if ($this->db->delete($table, $where))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function view_data($table, $field, $where)
    {
        if ($where)
        {
            $this->db->where($where);
        }
        $this->db->select($field);
        $this->db->from($table);
        return $this->db->get()->result();
    }

    public function UpdateData($table, $data, $where)
    {
        $this->db->where($where);
        if ($this->db->update($table, $data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function view_with_asc($table, $field, $order)
    {
        $this->db->select($field);
        $this->db->from($table);
        $this->db->order_by($order, "asc");
        return $this->db->get()->result();
    }

    public function view_with_desc($table, $field, $order)
    {
        $this->db->select($field);
        $this->db->from($table);
        $this->db->order_by($order, "desc");
        return $this->db->get()->result();
    }

    public function GetMultipleQueryResult($queryString)
    {
        if (empty($queryString))
        {
            return false;
        }
        $index = 0;
        $ResultSet = array();
        if (mysqli_multi_query($this->db->conn_id, $queryString))
        {
            do
            {
                if (false != $result = mysqli_store_result($this->db->conn_id))
                {
                    $rowID = 0;
                    while ($row = $result->fetch_object())
                    {
                        $ResultSet[$index][$rowID] = $row;
                        $rowID++;
                    }
                }
                $index++;
            } while (mysqli_next_result($this->db->conn_id) && mysqli_more_results($this->db->conn_id));
        }
        return $ResultSet;
    }

}
