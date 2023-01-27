<?php
	class Answers_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function add_answers($post_id){
			$data = array(
				'post_id' => $post_id,
				'body' => $this->input->post('answer')
			);

			return $this->db->insert('answers', $data);
		}

        public function get_answer($post_id){
            $query = $this->db->get_where('answers', array('post_id' => $post_id));
			return $query->result_array();
        }
}