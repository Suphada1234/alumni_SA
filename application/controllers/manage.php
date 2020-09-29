<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

    function __construct(){
        parent::__construct();
       // $this->load->model('Manage_model');
    }

    public function index(){

        //$this->load->view('form_work');
        
    }

    public function add_work(){
        //$addresswork = $this->input->post("c_number").$this->input->post("c_road").$this->input->post("c_district").$this->input->post("c_amphoe").$this->input->post("c_province").$this->input->post("c_zipcode");
        $dataworkinformation = array(
            //'work_id' => $this->input->post(),
            'company' => $this->input->post("company"),
            'position' => $this->input->post("position"),
            'year_int' => $this->input->post("year_int"),
            'year_out' => $this->input->post("year_out"),
            'c_number' => $this->input->post("c_number"),
            'c_road' => $this->input->post("c_road"),
            'c_district'=>$this->input->post("c_district"),
            'c_amphoe'=>$this->input->post("c_amphoe"),
            'c_province'=>$this->input->post("c_province"),
            'c_zipcode'=>$this->input->post("c_zipcode"),
            'c_tel' => $this->input->post("c_tel")
        );

        $data['work'] = $dataworkinformation;

        $this->load->view('show_work',$data);

        /*if($this->input->post("company")!= "" && $this->input->post("position")!== ""){
			//$this->load->view('view_insert_successwithmenulink');
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลประวัติการทำงานได้";
        }*/
        
        //print_r($dataworkinformation);

    }

    public function showall($dataworkinformation)
	{
		
		$this->load->view('show_work',$dataworkinformation);
	}
}