<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Manage extends CI_Controller {



    function __construct(){

        parent::__construct();

       // $this->load->model('Manage_model');

    }



    public function index(){

        $this->load->view('information');

    }



    public function information(){
        

         $name = $this->input->post("prefix").$this->input->post("fname");

        $datapersonal = array(

           
            'name' => $name,
            'lastname' => $this->input->post("lname"),

            'gender' => $this->input->post("gender"),

            'birthday' => $this->input->post("birthday")

        );
        
        $data1['information'] =$datapersonal;
            $this->load->view('Show_information',$data1);
    }
            

}