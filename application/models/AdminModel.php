<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{

    public function __construct()
    {
        $this->max_concat = $this->db->query("SET SESSION group_concat_max_len = 18446744073709551615;");
        parent::__construct();
    }

    public function getAllUsers()
    {

        $sql = "SELECT 
                 a.*,
                c.reference_name as `main_address`
                ,b.reference_name as `main_section`
            FROM
                file_sytem.tbl_users a
            LEFT JOIN
                file_sytem.tbl_reference b on a.section = b.id
            LEFT JOIN
                file_sytem.tbl_reference c on a.address = c.id
            
    ";
        return $this->db->query($sql)->result_array();
    }

    public function checkRecord($username)
    {
    }
}
