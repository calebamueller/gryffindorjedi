<?php
	class Grades_controller extends CI_Controller {
		
		public function __construct()
  		{
			parent::__construct();

			
  		}
  		
  		public function index()
  		{
  			$data['class_id'] = '';//how are we passing this info?
			$data['username'] = '';//teacher username and how are we limiting the teachers to this view?
  			$this->load->database();
  			$this->load->model('Grades_model');
			$this->load->view('addGrade');
  		}
		
		public function returnAssignments($class_id)
		{
			//this->class_id = $data['class_id'];
			$resourceInfo = $this->Grades_model->returnAssignments($class_id);
		}
		
		public function newAssignment()
		{
			$this->load->database();
  			$this->load->model('Grades_model');
  			$this->load->helper('form');
			$this->load->view('addGrade');
			$ass_name = $_POST['name'];
			$ass_description = $_POST['desc'];
			$points_possible = $_POST['pp'];
			$username = $_POST['nn'];
			
		 	$this->Grades_model->newAssignment($ass_name, $ass_description, $username, $points_possible);
		 	$result = "success";
		 	
		 	return $result;
		}
		
		public function removeResource($resourceID)
		{
			//look at codeigniter documentation
		}
	}
?>