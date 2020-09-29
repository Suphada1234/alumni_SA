<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

    public function contact(){

        $address = $this->input->post("c_number")." ".$this->input->post("c_road")." ".$this->input->post("c_district")." ".$this->input->post("c_amphoe")." ".$this->input->post("c_province")." ".$this->input->post("c_zipcode");
        $dataalumni = array(

            'address' => $address,
            'tel' => $this->input->post("c_tel"),
        );

        //print_r($dataalumni);

        $data2['contact']= $dataalumni;
        $this->load->view('confirm',$data2);
    }
}