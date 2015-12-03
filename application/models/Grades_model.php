<?php
	class Grades_model extends CI_Model {

		public function __construct()
		{
				parent::__construct();
				$this->load->database();
		}

		$query = $this->db->query("SELECT *  
									FROM slateDatabase.assignments
									WHERE (studentID ILIKE '%".$stuID."%')
									ORDER BY assignmentID DESC");
									
		foreach ($query->result_array() as $row)
		{
			echo $row['assignmentID'];
			echo $row['assignmentName'];
			echo $row['description'];
			echo $row['grade'];
			echo $row['pointsPossible'];
		}
	}
?>