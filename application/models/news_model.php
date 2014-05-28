<?php
    
    class News_model extends CI_Model{
    	public function __construct(){
    		// $this->load->database();
    	}//end constructor
		
		
		public function get_news($request){		 
			  $response = file_get_contents($request);
			  return simplexml_load_string($response);
		}
		
    }
    
?>