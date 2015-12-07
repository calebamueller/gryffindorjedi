<?php class Userinfo extends CI_Model {
  
  function __construct() {
    parent::__construct();
    $this->load->database();
  }
  
  public function getUser() {
    $query = $this->db->get('user');
    return $query->result();
  }
  
  //$this->db->close();
}
    