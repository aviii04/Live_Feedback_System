<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	// public function index()
	// {
	// 	$this->load->view('admin/registeration');   
		
	// }
	public function admin_homepg()
	{
		$this->load->view('admin/home_admin');
	}

	public function login()
	{
        $this->load->view('admin/login_pg');
	}

	
	
	public function registeration()
	{
		$this->load->view('admin/registeration');   

	}

	public function logout()
	{

		$this->session->unset_userdata('email');
		redirect(base_url().'admin/admin/login');

	}
	public function login_success()
	{

		

		if(isset($_SESSION['email']))
		{
			echo '<div><h1>Welcome '.$_SESSION['email'].'</h1></div>';
		    // echo '<div><h1>Password'.$_SESSION['password'].'</h1></div>';
		    echo '<label><a href="'.base_url().'admin/admin/logout">Logout</a></label>';
			//  $this->load->view('admin/login_success');
			 redirect(base_url().'admin/teacher_connect/teacher_home');
		}
		
		else
		 redirect(base_url().'admin/admin/login');
	}

	public function enter()
	{
		if(isset($_SESSION['email']))
		{
			echo '<div><h1>Welcome'.$_SESSION['email'].'</h1></div>';
            echo '<h1>Logout</h1>';
            redirect(base_url().'admin/admin/login_success');
		}
		else{
			// redirect(base_url().'');
			$this->index();	
		}
		// $this->load->view('admin/login_success');   

	}
	public function validate_registeration()
	{
		
		$this->form_validation->set_rules('email','Email','trim|valid_email|callback_username_check');
		$this->form_validation->set_rules('password','Password','trim|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('cnfpassword','Confirm Password','trim|max_length[20]|matches[password]');
		$this->form_validation->set_rules('firstName','First Name','trim|required|alpha|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('lastName','Last Name','trim|required|alpha|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('college','College','trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('gender','Gender','required');
       

                if ($this->form_validation->run() == FALSE)
                {
					
						$this->load->view('admin/registeration');
						
                }
                else
                {
					$this->load->model('admin/Authenticate');
						$this->Authenticate->register();
                        $this->load->view('admin/reg_success');
                }
	}
	public function username_check($str)
	{
		    $string="select email_id from teacher where email_id='$str'";
		    $query=$this->db->query($string);
			if ($query->num_rows())
			{
					$this->form_validation->set_message('username_check', 'The {field} has to be unique');
					return FALSE;
			}
			else
			{
					return TRUE;
			}
	}

	//=========================Log In===============================

	public function validate_login()
	{
		$this->form_validation->set_rules('email','Email','trim|valid_email');
		$this->form_validation->set_rules('password','Password','trim|min_length[5]|max_length[20]');

		if ($this->form_validation->run() == FALSE)
		{
			
				$this->load->view('admin/login_pg');
				
		}
		else
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$class=$this->input->post('class');

			$this->load->model('admin/Authenticate');
				if($this->Authenticate->login($email,$password))
				{
					$session_data=array(
						'email'=> $email,
						 'class'=>$class
					);
					$this->session->set_userdata($session_data);
					redirect(base_url().'admin/admin/enter');
				}
				else
				{
					$this->session->set_flashdata('error','Invalid Username and Password');
					redirect(base_url().'admin/admin/login');  //pass controler/function name

				}

				// $this->load->view('admin/login_success');
		}
	}
	
}
