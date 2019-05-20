<?php
class Main_model extends CI_Model{
   
    function insert_data($data)
    {
        $this->db->insert("table_user",$data);
    }
}
// Databe Operation Function write
?>