<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
	//echo("Welcome To CodeIgnitor");
	$this->load->view("main_view");
	}
	public function form_validation(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules("first_name","First Name",'required|alpha');
		$this->form_validation->set_rules("last_name","Last Name",'required|alpha');
		 
		if($this->form_validation->run())
		{
		  //true
		  $this->load->model("main_model");
          $data = array(
		  "first_name" =>$this->input->post("first_name"),
		  "last_name"  =>$this->input->post("last_name"),
		  );
		  $this->main_model->insert_data($data);
		  redirect(base_url()."main/inserted");
		}
	else
	{
        $this->index();
	}

	
}

public function inserted(){
	$this->index();
}
}


