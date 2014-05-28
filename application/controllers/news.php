<?php

	class News extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
 		}//end constructor
		
		public function index(){
			$request = "http://news.google.com/?output=rss";
			$this->load->model('News_model');
			$data['xml'] = $this->News_model->get_news($request);
			$data['title'] = "Here is our title tag!";
			$data['style'] = "cerulean.css";
			$data['banner'] = "Here is our web site!";
			$data['copyright'] = "copyright goes here!";
			$data['base_url'] = base_url();
			$this->load->view('header',$data);
			$this->load->view('news_view',$data);
			$this->load->view('footer',$data);
		}//end index
		
		
	}

   
?>