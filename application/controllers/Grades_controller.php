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
  			//$uid = ($_POST['user_id']);
  			//$cid = ($_POST['class_id']);
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
			
			$ass_name = ($_POST['name']);
   			$description = ($_POST['desc']);
   			$pointsPoss = ($_POST['pp']);
   			
   			$uid = "Jake";
   			$cid = 1;
   			
   			if(strlen($ass_name)<3)
   			{
   			
   			}
   			
   			if($pointsPoss<=0)
   			{
   				$pointsPoss = 0;
   			}else if($pointsPoss==null)
   			{
   				$pointsPoss = 1;
   			}
   			
		 	$this->Grades_model->newAssignment($ass_name, $description, $pointsPoss, $uid, $cid);

		}
		
		public function removeResource($resourceID)
		{
			//look at codeigniter documentation
		}
	}
?>