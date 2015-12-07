<?php
	class Grades_model extends CI_Model {

		public function __construct()
		{
				parent::__construct();
				$this->load->database();
		}
		
		public function returnAssignments($classID)
		{
			$this->db->select('ass_name, ass_description, username, point_possible');
			$this->db->where('classID', $classID);
			
			$query = $this->db->get('assignments');
			//do hashes in DB

			return $query->num_rows();
		}

		public function newAssignment($ass_name, $ass_description, $points_possible, $username, $class_id)
		{
			$newAssignment = array(
   				'ass_name' => $ass_name ,
   				'points_possible' => $points_possible,
   				'ass_description' => $ass_description,
   				'username' => $username,
   				'class_id' => $class_id
			);

			$this->db->insert('assignments', $newAssignment);
		}
		
		public function removeResource($resourceID)
		{
			//find out how to remove a tuple with codeIgniter
		}
		
		//$this->db->close();
}
?>