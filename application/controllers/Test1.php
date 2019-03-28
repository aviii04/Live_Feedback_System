<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test1 extends CI_Controller {

    public function get_summary()
    {
        $name = array("a b", "b c", "d e", "e f"); 
        $count=array();
        $key=array();
         for($j=0;$j<count($name);$j++)
          {
                 $count[$j]=0;
                 $key[$j]=("a".$j);
          }
        

         $this->load->model('Retrieve');
         $result=$this->Retrieve->retrieve_data();
         $d=$result->result_array();
        $keys = array_keys($d);
    
        // $b=array(
            
        //     "c"=>$d[$keys[2]]['feedback']
           
        // );

        for($i = 0; $i < count($d); $i++){
            $feedback=$d[$keys[$i]]['feedback'];
            $words=explode(",", $feedback);

                for($j=0;$j<count($words);$j++)
                {
                      for($k=0;$k<count($name);$k++)
                      {
                          if($words[$j]==$name[$k])
                            $count[$k]=$count[$k]+1;
                      }
                }

        }

        $c = array_combine($key, $count);
        $this->load->view('hello',$c);
        // ==================================================
        // $f=array();
        // $j=0;
        // $keys = array_keys($d); 
        // for($i = 0; $i < count($d); $i++) { 
        //     foreach($d[$keys[$i]] as $key => $value) { 
        //         $f["$j"]=$value;
        //         $j=$j+1;
        //     } 
        // } 
        // $this->load->view('hello',$f);
    }
}