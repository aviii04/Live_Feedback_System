<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student_feedback extends CI_Controller{
    public function feedback()
    {
        $email=$_SESSION['email'];
        $result=$this->input->post('data');
        // $this->load->view('public/student_form');
        $this->load->model('public/Stud_feedback');
        $this->Stud_feedback->push_data($email,$result);

        $this->load->view('public/home_user');
        echo '<h1>Congrats...'.$email.'</h1>';
    }

    public function insert_feedback()
    {
        $email=$_SESSION['email'];
        $result=$this->input->post('data');
        $c=array(
              "key"=>$result
        );
       // $this->load->model();
        $this->load->model('public/Stud_feedback');

        $class=$this->Stud_feedback->get_stu_class($email);

        $this->Stud_feedback->insert_feedback($result,$class,$email);
        $this->load->view('example',$c);

    }
}