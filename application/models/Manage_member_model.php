<?php 
class Manage_member_model extends CI_Model
{

        public function __construct() 
        {
                parent::__construct();
        }

        public function get_all($offset, $per_page = 10, $url = '/admin_manage_member/index') 
        {
                $sql = "SELECT  * FROM tb_member";
                $total = $this->db->query($sql)->num_rows();
                $sql .= "  Order by m_id asc limit $offset, $per_page";
                $query = $this->db->query($sql)->result_array();
                $this->load->library('pagination');
                $data['pagination'] = $this->pagination->pagin($total, $url, $per_page);
                $data['query'] = $query;
                return $data;
        }
        public function get_one($m_id)
        {
                $this->db->where('m_id',$m_id);
                $query = $this->db->get('tb_member');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function check_insert($username)
        {   
                $this->db->select ('*'); 
                $this->db->from ('tb_member');
                $this->db->where('m_username', $username);
                $query = $this->db->get ();
                if($query->num_rows() !=0)
                {
                    return TRUE;
                }
        }
        public function insert($ar = array())
        {
                $this->db->insert('tb_member',$ar);
        }
        public function update($m_id)
        {
                $this->m_name = $this->input->post('txtName');
                $this->m_username = $this->input->post('txtUsername');
                $this->m_password = $this->input->post('txtPassword');
                $this->db->update('tb_member', $this, array('m_id'=> $m_id));
        }

        public function drop($m_id)
        {
                $this->db->delete('tb_member', array('m_id'=> $m_id));
        }

}
