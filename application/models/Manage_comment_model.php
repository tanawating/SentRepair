<?php 
class Manage_comment_model extends CI_Model
{

        public function __construct() 
        {
                parent::__construct();
        }

        public function get_all($offset, $per_page = 20, $url = '/admin_manage_comment/index') 
        {
                $sql = "SELECT  * FROM tb_comment";
                $total = $this->db->query($sql)->num_rows();
                $sql .= "  Order by c_id desc limit $offset, $per_page";
                $query = $this->db->query($sql)->result_array();
                $this->load->library('pagination');
                $data['pagination'] = $this->pagination->pagin($total, $url, $per_page);
                $data['query'] = $query;
                return $data;
        }


}
