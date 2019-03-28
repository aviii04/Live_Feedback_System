<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacher_connect extends CI_Controller {
    public function teacher_home()
    {
        $this->load->view('admin/dashboard');
    }
    public function teacher_class()
    {
        $email=$_SESSION['email'];
        // $this->load->view('admin/dashboard');
        $class=$this->input->post('class');
        $subject=$this->input->post('subject');
        $topic=$this->input->post('topic');

        $this->load->model('admin/Teacher_data');
        $this->Teacher_data->push_data($class,$email);
        $this->Teacher_data->push_summary($class,$email,date('Y-m-d'),$subject,$topic);


    }
    public function get_summary()
    {
    //  $class=$this->input->post('class');
        //  $class=$_SESSION['email'];
        // $class1="email";
        // $class=array(
        //     'hello'=>$_SESSION['email']
        // );
        $this->load->model('admin/Teacher_data');
         
        $query=$this->Teacher_data->get_teacher_class($_SESSION['email']);
        foreach ($query->result_array() as $row)
          {
            $class=$row['class'];
       
          }
         $result['output']=$this->Teacher_data->summary($class);
        $this->load->view('admin/lect_summary',$result);  
        
        // ================Deleting Record===============
        $this->Teacher_data->delete_stu_feedback($class);
        $this->Teacher_data->delete_teacher_class($class);

        
    }

}
