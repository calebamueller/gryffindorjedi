<?php class Email extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

  public function getIDs($cid) {
		$this->db->select('username');
		$where = "class1= $cid OR class2= $cid OR class3= $cid OR class4= $cid OR class5= $cid OR class6= $cid";
		$this->db->where($where);
    $query = $this->db->get('users');
    return $query->result();
  }

	public function getTeacher() {
		$teacher = $this->session->userdata('username');
		$this->db->select('username');
		$array = array('professor' => '1', 'class1' => '');
		$this->db->where($array);
		$query = $this->db->get('users');
		return $query->result();
	}

	public function getClassName() {
		$username = $this->session->userdata('username');
		$this->db->select('class_name');
		$query = $this->db->get_where('classes', array('username' => $username), 1);
		return $query->result();
	}

	public function getCID() {
		$teacher = $this->session->userdata('username');
		$this->db->select('class_id');
		$this->db->where('instructor' = $teacher);
		$query = $this->db->get('class', 1);
		$cid = $query->result();
		return $cid;
	}

  $this->db->close();
?>
