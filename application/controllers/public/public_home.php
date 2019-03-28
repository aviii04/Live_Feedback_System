<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_home extends CI_Controller {

    public function index()
    {
        $this->load->view('public/login');
	}
	
	public function public_homepg()
	{
		$this->load->view('public/home_user');
	}

	public function login()
	{
        $this->load->view('public/login');
	}

	
	
	public function registeration()
	{
		$this->load->view('public/registeration');   

	}

	public function logout()
	{

		$this->session->unset_userdata('email');
		redirect(base_url().'public/public_home/login');

	}
	public function login_success()
	{

		

		if(isset($_SESSION['email']))
		{
			// echo '<div><h1>Welcome '.$_SESSION['email'].'</h1></div>';
		    // echo '<div><h1>Password'.$_SESSION['password'].'</h1></div>';
		    echo '<label><a href="'.base_url().'public/public_home/logout">Logout</a></label>';
			$this->load->view('public/student_form');
			// redirect(base_url().'public/student_feedback/feedback');
		}
		
		else
		 redirect(base_url().'public/public_home/login');
	}

	public function enter()
	{
		if(isset($_SESSION['email']))
		{
			echo '<div><h1>Welcome'.$_SESSION['email'].'</h1></div>';
            echo '<h1>Logout</h1>';
			redirect(base_url().'public/public_home/login_success');
			// redirect(base_url().'public/student_feedback/feedback');
			
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
		$this->form_validation->set_rules('class','Class','trim|required|max_length[30]');
		$this->form_validation->set_rules('gender','Gender','required');
       

                if ($this->form_validation->run() == FALSE)
                {
					
						$this->load->view('public/registeration');
						
                }
                else
                {
					$this->load->model('public/Authenticate');
						$this->Authenticate->register();
                        $this->load->view('public/reg_success');
                }
	}
	public function username_check($str)
	{
		    $string="select email_id from student where email_id='$str'";
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

	public function validate_login()
	{
		$this->form_validation->set_rules('email','Email','trim|valid_email');
		$this->form_validation->set_rules('password','Password','trim|min_length[5]|max_length[20]');

		if ($this->form_validation->run() == FALSE)
		{
			
				$this->load->view('public/login');
				
		}
		else
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->load->model('public/Authenticate');
				if($this->Authenticate->login($email,$password))
				{
					$session_data=array(
						'email'=> $email,
						'password'=>$password
					);
					$this->session->set_userdata($session_data);
					redirect(base_url().'public/public_home/enter');
				}
				else
				{
					$this->session->set_flashdata('error','Invalid Username and Password');
					redirect(base_url().'public/public_home/login');  //pass controler/function name

				}

				// $this->load->view('admin/login_success');
		}
	}

}