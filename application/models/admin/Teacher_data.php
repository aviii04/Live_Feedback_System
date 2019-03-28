<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_data extends CI_Model{
    public function push_data($class,$email)
    {
     $string="INSERT INTO teacher_class(teacher_id, class) VALUES ('$email','$class')";
     $this->db->query($string);
    }

    public function push_summary($class,$email,$date,$subject,$topic)
    {
         $string="INSERT INTO feedback_summary(teacher_id, class, subject, topic, date) VALUES ('$email','$class','$subject','$topic','$date')";
         $this->db->query($string);

        }

    public function summary($class)
    {
        $string="SELECT feedback FROM student_feedback where class='$class'";
        $query=$this->db->query($string);
        // foreach ($query->result() as $row)
        // {
        //         echo $row->title;
               
        // }    
        return $query->result_array();
    }

    public function get_teacher_class($email)
    {
        $string="SELECT class FROM teacher_class WHERE teacher_id='$email'";
        $query=$this->db->query($string);
        return $query;
    }
    public function delete_stu_feedback($class)
    {
        $string="DELETE FROM student_feedback WHERE class='$class'";
        $this->db->query($string);
        // return $query;
    }
    public function delete_teacher_class($class)
    {

        $string="DELETE FROM `teacher_class` WHERE class='$class'";
        $this->db->query($string);
        // return $query;
    }
}
