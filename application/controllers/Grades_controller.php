<?php
	class Grades_controller extends CI_Controller {
		
		public function __construct()
  		{
			parent::__construct();

			$data['class_id'] = '';//how are we passing this info?
			$data['username'] = '';//teacher username and how are we limiting the teachers to this view?
			
			$this->load->database();
			$this->load->view('addGrade');
			$this->load->model('Grades_model');
  		}
		
		public function returnAssignments($class_id)
		{
			this->class_id = $data['class_id'];
			$resourceInfo = $this->Grades_model->returnAssignments($class_id);
		}
		
		public function newAssignment($ass_name, $ass_description, $username, $point_possible)
		{
		 	$this->Grades_model->newAssignment($ass_name, $ass_description, $username, $point_possible);
		}
		
		public function removeResource($resourceID)
		{
			//look at codeigniter documentation
		}
	}
?>