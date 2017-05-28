<?php 
class Home_model extends CI_Model
{

        public function __construct() 
        {
            parent::__construct();
        }

        public function get_all($offset, $per_page = 10, $url = '/home/index') 
        {
            $sql = "SELECT  * FROM tb_status";
            $total = $this->db->query($sql)->num_rows();
            $sql .= "  Order by s_id desc limit $offset, $per_page";
            $query = $this->db->query($sql)->result_array();
            $this->load->library('pagination');
            $data['pagination'] = $this->pagination->pagin($total, $url, $per_page);
            $data['query'] = $query;
            return $data;
        }
        public function insert($ar = array())
        {
            $this->db->insert('tb_comment',$ar);
        }
        public function check_login($txtusername,$txtpassword)
        {
                $this->db->where('m_username',$txtusername);
                $this->db->where('m_password',$txtpassword);
                $query = $this->db->get('tb_member');
                return $query->row();
        }


}
