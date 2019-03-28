<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retrieve extends CI_Model{

    public function retrieve_data()
    {

        $name = array("Zack", "Anthony", "Ram", "Salim", "Raghav"); 
        $string="SELECT `feedback` FROM `data` WHERE class='C'";  //change static value C
        $result=$this->db->query($string);

        // return $result->result_array();
        return $result;

    }


}