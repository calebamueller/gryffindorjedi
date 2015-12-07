<?php class Userinfo extends CI_Model {

  function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getUser() {

	$array=array();

	$this->db->select('a.class_name, a.instructor');
    	$this->db->from('classes as a');
	$this->db->join('users as b',"a.class_id = b.class1");
	$class= $this->db->get();

	foreach ($class->result() as $row){
		$array[] = array(
			'class1' => $row
		);

	}	

	$this->db->select('c.class_name, c.instructor');
	$this->db->from('classes as c');
	$this->db->join('users as d', 'c.class_id = d.class2');
	$class2 = $this->db->get();

	foreach ($class2->result() as $row){
		$array[] = array(
			'class2' => $row
		);
	}

	$this->db->select('e.class_name, e.instructor');
	$this->db->from('classes as e');
	$this->db->join('users as f', 'e.class_id = f.class3');
	$class3 = $this->db->get();

	foreach ($class3->result() as $row){
		$array[] = array(
			'class3' => $row
		);
	}

	$this->db->select('g.class_name, g.instructor');
	$this->db->from('classes as g');
	$this->db->join('users as h', 'g.class_id = h.class4');
	$class4 = $this->db->get();

	foreach ($class4->result() as $row){
		$array[] = array(
			'class4' => $row
		);
	}

	return $array;


  }

  //$this->db->close();
}
