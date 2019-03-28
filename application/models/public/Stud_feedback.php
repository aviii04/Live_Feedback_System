<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stud_feedback extends CI_Model{

  public function push_data($email,$result)
  {
    $string="select class from student where email_id='$email'";
    $query=$this->db->query($string);
    $row = $query->row();

    if (isset($row))
    {
            $class= $row->class;
           
    }

    // $feedback=$this->input->post('doubt');

    $string="INSERT INTO student_feedback(student_id,feedback,class) VALUES('$email','$result','$class')";
    $query = $this->db->query($string);

  }

  public function get_stu_class($email)
  {
     $string="select class from student where email_id='$email'";
      return $this->db->query($string);
  }
  public function insert_feedback($result,$class,$email)
  {
    $string="INSERT INTO student_feedback(student_id, feedback, class) VALUES('$email','$result','$class')";
    $query = $this->db->query($string);

  }
}
