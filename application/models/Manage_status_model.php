<?php 
class Manage_status_model extends CI_Model
{

        public function __construct() 
        {
                parent::__construct();
        }

        public function get_all($offset, $per_page = 5, $url = '/admin_manage_status/index') 
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
        public function get_one($s_id)
        {
                $this->db->where('s_id',$s_id);
                $query = $this->db->get('tb_status');
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function insert($ar = array())
        {
                $this->db->insert('tb_status',$ar);
        }

        public function update($s_id)
        {
                $this->s_type = $this->input->post('txtType');
                $this->s_name = $this->input->post('txtName');
                $this->s_issue = $this->input->post('txtIssue');
                $this->s_status = $this->input->post('txtStatus');
                $this->s_detail = $this->input->post('txtDetail');
                $this->db->update('tb_status', $this, array('s_id'=> $s_id));
        }

        public function drop($s_id)
        {
                $this->db->delete('tb_status', array('s_id'=> $s_id));
        }

}
