<?php
	class Grades_controller extends CI_Controller {
		
		public function __construct()
  		{
			parent::__construct();
			$this->load->database();
			$this->load->library(array('session', 'encryption', 'form_validation'));
			//$this->load->library('encryption');
			$this->load->helper(array('security', 'url','form'));
			//$this->load->helper('url');
			$this->load->model('Loginmod');
  		}
  		
  		public function index()
  		{
  			$this->load->database();
  			$this->load->model('Grades_model');
			$this->load->view('addGrade');
  		}
		
		public function returnAssignments($class_id)
		{
			//this->class_id = $data['class_id'];
			//$resourceInfo = $this->Grades_model->returnAssignments($class_id);
		}
		
		public function newAssignment()
		{
			$this->load->database();
  			$this->load->model('Grades_model');
  			$this->load->helper('form');
			$this->load->view('addGrade');
			
			
			/*$ass_name = $_POST['name'];
			$ass_description = $_POST['desc'];
			$points_possible = $_POST['pp'];
			$username = $_POST['nn'];
			$class_id = $_POST['cid'];*/
			$ass_name = $_POST['name'];
   			$description = $_POST['desc'];
   			$pointsPoss = $_POST['pp'];
   			
   			$uid = "Jake";
   			$cid = "1";
   			
   			//echo $ass_name;
   			//echo $_POST['name'];
   			//echo json_encode($ass_name);
   			
   			
		 	$this->Grades_model->newAssignment($ass_name, $description, $pointsPoss, $uid, $cid);
		 	$result = "success";
		 	
		 	return $result;
		}
		
		public function removeResource($resourceID)
		{
			//look at codeigniter documentation
		}
	}
?>