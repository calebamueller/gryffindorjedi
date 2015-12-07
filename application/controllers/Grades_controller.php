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

		public function returnAssignments()
		{
			$this->load->database();
  			$this->load->model('Grades_model');
			$this->load->view('displayResources');

			/*//$cid = ($_POST['class_id']);
			$cid = 1;

			$data = $this->Grades_model->returnAssignments($cid);

			$data = json_encode($this)

			//return $data;*/
		}

		public function newAssignment()
		{
			$this->load->database();
  			$this->load->model('Grades_model');
  			$this->load->helper('form');
			//$this->load->view('addGrade');

            //$data = json_decode(file_get_contents("php://input"));
            //$ass_name->$data->name;
            //$description= $data->desc;
            //$pointsPoss = $data->pp;

            $class_id = ($_POST['class_id']);


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

   			
		 	$this->Grades_model->newAssignment($class_id, $ass_name, $description, $pointsPoss, $uid, $cid);

			redirect('Home/index', 'refresh');
		}

		public function removeResource($resourceID)
		{
			//look at codeigniter documentation
		}
	}
?>
