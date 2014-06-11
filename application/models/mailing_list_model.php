<?php
    
    class Mailing_list_model extends CI_Model{
    	public function __construct(){
    		$this->load->database();
    	}//end constructor
		
		public function get_mailing_list(){
			//$query = $this->db->get('mailing_list');
			return $this->db->get('mailing_list');
		}//end get mailing list
		
		public function get_id($id){
			//will show all data in table name mail_list
			// $this->db->select('userid,first_name,last_name,email,address,state_code,zip_postal,bio');
			$this->db->where('userid', $id);
			return $this->db->get('mailing_list');
		}//end get_id
		
		public function insert(){
			$this->db->insert('mailing_list', $row);
			return $this->db->insert_id();
		}//end insert
    }
    
?>