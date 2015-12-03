<?php class Email extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

  public function getIDs {
    $this->db->select('username');
    $query = $this->db->get('users');
    return $query->result();
  }

  $this->db->close();
?>
