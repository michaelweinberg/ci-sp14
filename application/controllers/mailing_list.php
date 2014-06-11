<?php

	class Mailing_list extends CI_Controller{
		
		function __construct(){
			parent::__construct();
                        $this->load->model('Mailing_list_model');
			 }//end constructor
		
		public function index(){
			$data['query'] = $this->Mailing_list_model->get_mailing_list();
                        $this->config->set_item('style','cerulean.css');
			$data['title'] = "Here is our title tag!";
			$data['banner'] = "Here is our web site!";
			$data['copyright'] = "copyright goes here!";
			//$data['base_url'] = base_url();
			$this->load->view('header',$data);
			$this->load->view('view_mailing_list',$data);
			$this->load->view('footer',$data);
		}//end index
		
		public function view($id){
			//this will show us the data from a single page
                        $data['query'] = $this->Mailing_list_model->get_id($id);
			$data['title'] = "Here is our title tag!";
			
			$data['banner'] = $id;
			$data['copyright'] = "copyright goes here!";
			//$data['base_url'] = base_url();
			$this->load->view('header',$data);
			$this->load->view('view_mailing_list_detail',$data);
			$this->load->view('footer',$data);
		}//end view
		
		public function add(){
			//form to add a new record
			$this->load->helper('form');
			$data['title'] = "Adding a record";
			$data['banner'] = "Banner";
			$data['copyright'] = "copyright goes here!";
			$this->load->view('header',$data);
			$this->load->view('add_mailing_list',$data);
			$this->load->view('footer',$data);			
				}
		
		public function insert(){//will insert data via add
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
                        $this->form_validation->set_rules('first_name','First Name','trim|required');
                        $this->form_validation->set_rules('last_name','Last Name','trim|required');
                        $this->form_validation->set_rules('address','Address','trim|required');
                        $this->form_validation->set_rules('zip_postal','Zip Code','trim|required');
                        $this->form_validation->set_rules('username','Username','trim|required');
                        $this->form_validation->set_rules('password','Password','trim|required');
			//must have at least one validation rule to insert			
			
			if($this->form_validation->run() == FALSE){
				//view data on failure goes here
				//form to add a new record
			$this->load->helper('form');
			$data['title'] = "Adding a record";
			$data['style'] = "cerulean.css";
			$data['banner'] = "Data Entry Error";
			$data['copyright'] = "copyright goes here!";
			$this->load->view('header',$data);
			$this->load->view('add_mailing_list',$data);
			$this->load->view('footer',$data);
				

			}else{//insert data
				$post = array(
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address'),
					'zip_postal' => $this->input->post('zip_postal'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'bio' => $this->input->post('bio'),
					'interests' => $this->input->post('interests'),
					'num_tours1' => $this->input->post('num_tours1'),
					'num_tours2' => $this->input->post('num_tours2'),
					'num_tours3' => $this->input->post('num_tours3')
				);
				
				$id = $this->Mailing_list_model->insert($post);
				
				redirect('/mailing_list/view/' . $id);
				//echo "data inserted";
			}
			
		}
	}

   
?>