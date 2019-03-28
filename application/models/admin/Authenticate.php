<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Model{

    public function register()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $cnfpassword=$this->input->post('cnfpassword');
        $firstName=$this->input->post('firstName');
        $lastName=$this->input->post('lastName');
        $college=$this->input->post('college');
        $gender=$this->input->post('gender');

        $string="INSERT INTO teacher(email_id,password,first_name,last_name,gender,college) VALUES('$email','$password','$firstName','$lastName','$gender','$college')";
        $query = $this->db->query($string);
    }

    public function login($email,$password)
    {
        $string="select email_id from teacher where email_id='$email' AND password='$password'";
        $query = $this->db->query($string);

        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}