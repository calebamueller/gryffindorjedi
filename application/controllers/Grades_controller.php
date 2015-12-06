<?php
	class Grades_controller extends CI_Controller {
		
		public function __construct()
  		{
			parent::__construct();
			$this->load->database();
			$this->load->model('Grades_model');
  		}
		
		public function returnResources($classID)
		{
			$resourceInfo = $this->Grades_model->returnAssignments($classID);
		}
		
		public function newResource($blobResource, $description, $assignmentName, $pointsPossible)
		{
		 	$this->Grades_model->newResource($blobResource, $description, $assignmentName, $pointsPossible);
		}
		
		public function removeResource($resourceID)
		{
			//look at codeigniter documentation
		}
	}
?>